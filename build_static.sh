#!/bin/sh

# This runs php once and builds up all this html, then shoves it in a static file for distribution
# You could host this on s3, or github sites, or... anything, really.
rm -rf dist
mkdir -p dist
php ./index.php > dist/index.html
cp -R downloads dist/downloads
cp -R images dist/images
mkdir -p dist/scraper/files
mkdir -p dist/scraper/images
cp -R scraper/files dist/scraper
cp -R scraper/images dist/scraper
cp *.js dist/
cp *.css dist/
zip -r full_site.zip ./dist > /dev/null
mv full_site.zip ./dist/full_site.zip