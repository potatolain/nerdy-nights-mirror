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
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=8747",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=33274",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=33308"
];

var advUrls = [
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=17074",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=33260",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=36958",
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=36969"
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
    "http://nintendoage.com/forum/messageview.cfm?catid=22&threadid=19733",
    "https://atariage.com/forums/topic/71120-6502-killer-hacks/"
];

var lookup = {
    main: [],
    advanced: [],
    audio: [],
    misc: []
};

const currentHost = 'http://nintendoage.com';

// If urls you were using are broken (and perhaps make you download the wrong thing) use this to replace the link
// with a local file.
var urlReplacements = {
    'http://www.zophar.net/utilities/download/TileMolester_015a_bin.zip': 'downloads/missing/tilemolester-0.16.zip',
    'https://www.eecs.umich.edu/~ackerm/vita.pdf': 'downloads/missing/vita.pdf'
};

var downloadBlacklist = [
    'zophar.net', // Urls are beyond broken for this. 
    'expressions/face-', // I uh... not sure what's going on here, but that's not gonna work.
    '_images/expressions/'
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
            posts = deliciousCereal('[data-role="commentContent"],.m8t');// If this breaks, this is likely where it fails. This is a class for the html of the post.

        var title = deliciousCereal('h1.ipsType_pageTitle,h2').first().text().trim();
        if (allUrls[i].url.indexOf('nintendoage') !== -1) {
            if (deliciousCereal('h2 small').length) {
                subTitle = deliciousCereal('h2 small').text();
                if (subTitle.length) {
                    title = title.replace(subTitle, '').trim();
                    title += ': ' + subTitle;
                }
            }
        } else if (allUrls[i].url.indexOf('atariage') !== -1) {
            title = 'AtariAge: ' + title;
        }

        // Cleaning up title/subtitle repitition in some of these
        if (title.startsWith('Homebrew')) {
            title = title.replace('Homebrew', '').trim();
        }

        async function parseLinks(stupid, isComment) {

            // Now, do a little bit of manipulation on the page... we want to take over all the images and file links!
            var allImg = []
            stupid.post.find('img').each(function(imgIndex, elem) {
                var datCheerio = deliciousCereal(this);
                allImg.push((async function() {
                    var url = datCheerio.attr('src');

                    for (var i = 0; i != downloadBlacklist.length; i++) {
                        if (url.indexOf(downloadBlacklist[i]) !== -1) {
                            datCheerio.attr('style', 'display: none;');
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
                            id: i,
                            isComment: isComment,
                            existsInRepo: fs.existsSync('../images/nerdy-nights-sound/' + path.basename(url))
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
                            id: i,
                            isComment: isComment,
                            existsInRepo: fs.existsSync('../images/missing/' + path.basename(url).replace('?', '_').replace('=', '_'))
                        });
                        return;
                    }
                    fs.writeFileSync('./images/' + path.basename(url), imgResult.data);
                    console.debug('Downloaded and mirrored ' + url + ' to ' + './images/' + path.basename(url));
                })());
            })
            await Promise.all(allImg);

            var allHref = [];
            stupid.post.find('a[href]').each(function(fileIndex, elem) {
                var href = deliciousCereal(this).attr('href');

                if (urlReplacements[href]) {
                    deliciousCereal(this).attr('href', urlReplacements[href]);   
                    return;
                }

                if (!href.endsWith('.zip') && !href.endsWith('.txt') && !href.endsWith('.pdf')) {
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
                var _this = this;
                allHref.push( (async function() {
                    
                    try {
                        var zipFile = await axios.request({
                            responseType: 'arraybuffer',
                            url: href,
                            method: 'get',
                            headers: {
                                'Content-Type': (href.endsWith('.zip') ? 'application/zip' : (href.endsWith('.pdf') ? 'application/pdf' :  'text/plain'))
                            }
                        });
                    } catch (e) {
                        console.warn('Failed downloading file at ', href, e.message);
                        deliciousCereal(_this).attr('original-href', href);
                        deliciousCereal(_this).attr('href', 'downloads/missing/' + path.basename(href));
                        missingImages.push({
                            newUrl: 'downloads/missing/' + path.basename(href),
                            originalUrl: href,
                            page: title,
                            id: i,
                            isComment: isComment,
                            existsInRepo: fs.existsSync('../downloads/missing/' + path.basename(href))
                        });
                        return;
                    }

                    fs.writeFileSync('./files/' + path.basename(href), zipFile.data);
                    console.debug('Downloaded and mirrored ' + href + ' to ' + './scraper/files/' + path.basename(href));
                })() );
            })

            await Promise.all(allHref);

            return stupid.post;
        }

        console.info('Starting page ' + i + ': ' + title);
        lookup[allUrls[i].type].push({
            originalUrl: allUrls[i].url,
            name: title,
            filename: i + '.php'
        });

        // force pass-by-reference
        var stupid = {post: deliciousCereal(posts.get(0))};
        await parseLinks(stupid, false);

        fs.writeFileSync('./pages/' + i +'.php', deliciousCereal(posts[0]).html());
        try { fs.mkdirSync('./pages/' + i); } catch (e) { /* meh */ }

        var postId = 1;
        for (postId = 1; postId != posts.length; postId++) {
            // force pass-by-reference
            var stupid = {post: deliciousCereal(posts.get(postId))};
            await parseLinks(stupid, true);
            var theHtml = deliciousCereal('<div>');
            theHtml.append(
                '<div class="mdl-card__title">' +
                    '<strong>' + 
                        deliciousCereal(posts[postId]).closest('.row,article').find('a.h4,a.ipsType_break').text() + 
                    '</strong>' + 
                    ' posted on ' +
                    deliciousCereal(posts[postId]).closest('.panel,article').find('.panel-heading,time').text() +
                '</div>' + 
                '<div class="mdl-card__supporting-text">' + 
                    deliciousCereal(posts[postId]).html() +
                '</div>' +
                '<div class="mdl-card--border"></div>'
            );
            fs.writeFileSync('./pages/' + i + '/' + postId + '.php', theHtml.html());
        }

        var ongoingPostId = postId;
        var nextUrl = true;
        while (nextUrl) {
            nextUrl = null;
            var pages = deliciousCereal('.pagination,.ipsPagination').first().find('li');
            for (var pageId = 0; pageId != pages.length; pageId++) {
                if (deliciousCereal(pages.get(pageId)).find('a').text().trim().toLowerCase() == 'next' && !deliciousCereal(pages.get(pageId)).hasClass('ipsPagination_inactive')) {
                    var theUrl = deliciousCereal(pages.get(pageId)).find('a').attr('href');
                    nextUrl = (theUrl.startsWith('http') ? '' : currentHost) + theUrl;
                }
            }
            if (!nextUrl) {
                break;
            }

            console.info('Getting additional comments, starting at ' + ongoingPostId + ': ' + nextUrl);
            content = await axios.get(nextUrl);
            deliciousCereal = cheerio.load(content.data);
            posts = deliciousCereal('[data-role="commentContent"],.m8t');
            for (var postId = 0; postId != posts.length; postId++) {
                // force pass-by-reference
                var stupid = {post: deliciousCereal(posts.get(postId))};
                await parseLinks(stupid, true);
                var theHtml = deliciousCereal('<div>');
                theHtml.append(
                    '<div class="mdl-card__title">' +
                        '<strong>' + 
                            deliciousCereal(posts[postId]).closest('.row').find('a.h4').text() + 
                        '</strong>' + 
                        ' posted on ' +
                        deliciousCereal(posts[postId]).closest('.panel').find('.panel-heading').text() +
                    '</div>' + 
                    '<div class="mdl-card__supporting-text">' + 
                        deliciousCereal(posts[postId]).html() +
                    '</div>' +
                    '<div class="mdl-card--border"></div>'
                );
                fs.writeFileSync('./pages/' + i + '/' + (ongoingPostId++) + '.php', theHtml.html());
    
            }
        }

        console.info('Finished page ' + i + ': ' + title);
    }

    fs.writeFileSync('./pages/lookup.json', JSON.stringify(lookup, null, 4));
    fs.writeFileSync('./pages/missing-files.json', JSON.stringify(missingImages, null, 4));
}

main().then(function(err) {
    console.info('Scraping complete!');
    console.info('Missing images + files', missingImages);
    console.info('If any files are marked as not existing in the repo, please try to find them on archive.org or other sites, and add them in.');
}, function(err) {
    console.error('Something went wrong when scraping!', err);
})