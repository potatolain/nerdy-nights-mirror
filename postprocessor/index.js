// Replaces all images to have src removed, and show-src set
var cheerio = require('cheerio'),
    fs = require('fs'),
    data = fs.readFileSync('dist/index.html').toString(),
    app = cheerio.load(data);

app('img').each(function(idx, element) {
    app(this).attr('show-src', app(this).attr('src'));
    app(this).attr('src', '');
});

fs.writeFileSync('dist/index.html', app.html());