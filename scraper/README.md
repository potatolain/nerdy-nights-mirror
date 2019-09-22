# What?

This is a quick-and-dirty scraper that reads the html of the various tutorial pages, and adapts them to a
format we can show on the site. It uses nodejs, simply because that's what I use most often at work.

Run it by calling `npm run scrape` after an `npm install` - it'll populate the `pages` directory in this folder. 
Move things to  the real one after validating they look roughly correct. (No fancy automatic validation here, sorry!)