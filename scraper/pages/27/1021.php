<div class="mdl-card__title"><strong>Kiro</strong> posted on 
		
			
				
				Apr 03 at 12:22:11 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Ended up figuring out the table indexing thing, sorry it took me a while to get back.<br>
<br>
New thing I&apos;m trying to work out, how to find the position of my sprite relative to the background byte in the nametable <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span> oh joy<br>
<br>
EDIT: So i&apos;ve been doing some research over a few days now but can&apos;t find much related to determining what nametable byte my sprite is overlapping. I found this but I&apos;m struggling to translate it to my use case - <a href="https://forums.nesdev.com/viewtopic.php?f=10&amp;t=14788" target="_blank">https://forums.nesdev.com/viewtop...</a><br>
<br>
I have a single screen level, no scolling. Using 16x16 metatiles for my background. My sprite (also 16x16) moves 16px at a time so will always start/stop within a matching 16x16 background metatile boundary. I can work out my sprites top left (8x8) tile top(x) and left(y) positions easily enough using the OAM values. But I&apos;m finding it hard to figure out how to translate that to a nametable address. I want to do this because when my sprite moves to a certain tile I want to swap out the background tile in the nametable. Which i can do manually with some testing code, buut obviously I need to do this programatically.<br>
<br>
e.g. 8x8 sprite tile top = 48px down from top of screen, left = 128px across the screen should = $2110 in the namtable for example.<br>
<br>
EDIT: Figured it out  - feels so satisfying when it comes together. For those curious, I had already created a collision table and was indexing into that for collision detection. I just re-used the collision coords and did a bit of math to calculate the number of bytes to index into the nametable address space.
				</div><div class="mdl-card--border"></div>