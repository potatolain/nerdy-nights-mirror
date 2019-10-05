# What is this?

This is a mirror site for the Nerdy Nights tutorial originally posted on NintendoAge. More information about the tutorial
itself is avaialble in the Overview section of the site, however this will focus on the scripts/setup.

The data for the site is mainly populated by a scraper script written in nodejs. It creates a bunch of html files
(named .php because I'm lazy) and some meta information in json files that is combined into a functional site using php.

The scraper is in the `scraper` directory. Run it using `npm run scrape` then any updated data should
be committed to github. Keep an eye on changing links; if a file is updated, _make sure it is still a valid file_ -
it could be that the original source went down, and we were served some html/junk data!

Note that the scraper is extremely quick-and-dirty... I tried to comment throughout, but it's very custom-build for 
this use case. Hopefully this helps someone, or it at least gives a place to fix things that are missing.

## Starting up

Run start.sh... this is best for local development. For production either host the php, or ideally build the static
version and host that. (There may very well be security holes in the php version!)

## Production
 
Run build_static.sh - this will create a `dist` diresctory with all of the output you need to host this thing, and none of
the php needed to build it. Nice.