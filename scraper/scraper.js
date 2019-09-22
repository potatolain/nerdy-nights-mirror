var fs = require('fs'),
    axios = require('axios'),
    cheerio = require('cheerio'),
    path = require('path');

var mainUrls = [
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=4150",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=4147",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=4291",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=4440",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=6082",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=7974",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=8172",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=8747"
];

var advUrls = [
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=17074",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=33260",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=36958"
];

var soundUrls = [
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=22487",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=22484",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=22610",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=22776",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=23024",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=23452",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=24885",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=25253",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=25583",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=26247",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=27943"
];

var miscUrls = [
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=19733"
];

var lookup = {
    main: [],
    advanced: [],
    audio: [],
    misc: []
};

var downloadBlacklist = [
    'zophar.net', // Urls are beyond broken for this. 
    'expressions/face-' // I uh... not sure what's going on here, but that's not gonna work.
];

var allUrls = [];
for (var i = 0; i != mainUrls.length; i++) {
    allUrls.push({
        type: 'main',
        url: mainUrls[i]
    })
}
for (var i = 0; i != advUrls.length; i++) {
    allUrls.push({
        type: 'advanced',
        url: advUrls[i]
    })
}
for (var i = 0; i != soundUrls.length; i++) {
    allUrls.push({
        type: 'audio',
        url: soundUrls[i]
    })
}
for (var i = 0; i != miscUrls.length; i++) {
    allUrls.push({
        type: 'misc',
        url: miscUrls[i]
    })
}

var missingImages = [];

async function main() {
    try { fs.mkdirSync('./pages') } catch (e) { /* Assume it exists, and move on*/ }
    try { fs.mkdirSync('./images') } catch (e) { /* ditto */ }
    try { fs.mkdirSync('./files') } catch (e) { /* tritto?? */ }

    for (var i = 0; i != allUrls.length; i++) {
        var content = await axios.get(allUrls[i].url),
            deliciousCereal = cheerio.load(content.data),
            post = deliciousCereal('.m8t').first(),// If this breaks, this is likely where it fails. This is a class for the html of the post.
            title = deliciousCereal('h2').text();
        if (deliciousCereal('h2 small').length) {
            subTitle = deliciousCereal('h2 small').text();
            if (subTitle.length) {
                title = title.replace(subTitle, '').trim();
                title += ': ' + subTitle;
            }
        }

        if (title.startsWith('Homebrew')) {
            title = title.replace('Homebrew', '').trim();
        }

        // Now, do a little bit of manipulation on the page... we want to take over all the images and file links!
        var allImg = []
        post.find('img').each(function(imgIndex, elem) {
            var datCheerio = deliciousCereal(this);
            allImg.push((async function() {
                var url = datCheerio.attr('src');

                for (var i = 0; i != downloadBlacklist.length; i++) {
                    if (url.indexOf(downloadBlacklist[i]) !== -1) {
                        return;
                    }
                }    

                // Original site already down, sadly... hopefully we can pull some backup images
                if (url.indexOf('tummaigames') !== -1) {
                    datCheerio.attr('original-src', url);
                    datCheerio.attr('src', 'images/nerdy-nights-sound/' + path.basename(url));
                    missingImages.push({
                        newUrl: 'images/nerdy-nights-sound/' + path.basename(url),
                        originalUrl: url,
                        page: title,
                        id: i
                    });
                    return;
                }

                datCheerio.attr('original-src', datCheerio.attr('src'));
                datCheerio.attr('src', 'scraper/images/' + path.basename(url));
                try {
                    var imgResult = await axios.request({
                        responseType: 'arraybuffer',
                        url: url,
                        method: 'get',
                        headers: {
                        'Content-Type': 'audio/mpeg',
                        }                  
                    });
                } catch (e) {
                    console.warn('Failed downloading image at ', url, e.message);
                    datCheerio.attr('original-src', url);
                    datCheerio.attr('src', 'images/missing/' + path.basename(url).replace('?', '_').replace('=', '_'));
                    missingImages.push({
                        newUrl: 'images/missing/' + path.basename(url).replace('?', '_').replace('=', '_'),
                        originalUrl: url,
                        page: title,
                        id: i
                    });
                    return;
                }
                fs.writeFileSync('./images/' + path.basename(url), imgResult.data);
                console.debug('Downloaded and mirrored ' + url + ' to ' + './images/' + path.basename(url));
            })());
        })
        await Promise.all(allImg);

        var allHref = [];
        post.find('a').each(function(fileIndex, elem) {
            var href = deliciousCereal(this).attr('href');

            if (!href.endsWith('.zip') && !href.endsWith('.txt')) {
                return;
            }

            for (var i = 0; i != downloadBlacklist.length; i++) {
                if (href.indexOf(downloadBlacklist[i]) !== -1) {
                    return;
                }
            }

            // Original site already down, sadly... but we have backups saved in the repo!
            if (href.indexOf('tummaigames') !== -1) {
                deliciousCereal(this).attr('href', 'downloads/NerdyNightsSoundSourceCollection/' + path.basename(href));
                return;
            }

            deliciousCereal(this).attr('href', 'scraper/files/' + path.basename(href));

            allHref.push( (async function() {
                
                try {
                    var zipFile = await axios.request({
                        responseType: 'arraybuffer',
                        url: href,
                        method: 'get',
                        headers: {
                            'Content-Type': href.endsWith('.zip') ? 'application/zip' : 'text/plain'
                        }
                    });
                } catch (e) {
                    console.warn('Failed downloading file at ', href, e.message);
                    deliciousCereal(this).attr('original-href', href);
                    deliciousCereal(this).attr('href', 'images/missing/' + path.basename(href));
                    missingImages.push({
                        newUrl: 'downloads/missing/' + path.basename(href),
                        originalUrl: href,
                        page: title,
                        id: i
                    });
                    return;
                }

                fs.writeFileSync('./files/' + path.basename(href), zipFile.data);
                console.debug('Downloaded and mirrored ' + href + ' to ' + './scraper/files/' + path.basename(href));
            })() );
        })

        await Promise.all(allHref);


        lookup[allUrls[i].type].push({
            originalUrl: allUrls[i].url,
            name: title,
            filename: i + '.php'
        });
        fs.writeFileSync('./pages/' + i +'.php', post.html());
        console.info('Finished page ' + i + ': ' + title);
    }

    fs.writeFileSync('./pages/lookup.json', JSON.stringify(lookup, null, 4));
    fs.writeFileSync('./pages/missing-files.json', JSON.stringify(missingImages, null, 4));
}

main().then(function(err) {
    console.info('Scraping complete!');
    console.info('Missing images + files from tummaigames site', missingImages);
    console.info('Grab whatever we can manually from web.archive.org, put them in images/nerdy-nights/sound -- good luck');
}, function(err) {
    console.error('Something went wrong when scraping!', err);
})