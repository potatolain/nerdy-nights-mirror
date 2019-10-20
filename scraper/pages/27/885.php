<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Jan 15, 2017 at 8:25:55 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>RockyHardwood</b></i><br>
	<br>
	thanks for the tips! when putting it in ram, is there a specific way to do that? one time I tried changing a byte in a name table that I .incbin&apos;ed before loading it, but that didn&apos;t seem to have any affect. granted, it was one of the nametables that has the attributes included so maybe that messed it up?</div>
<br>
For the one that I posted above, they were just stored in order. Some tricks had to be employed in order to update them as they loaded (i.e. only loading the top two, and preserving the bottom two when not wanting to update them). When I go to rewrite them very little ram will be used, I am guessing, since it simply is not needed. I am still not sure why I did it that way <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>. That was genuinely surprising to discover that. Then again, I had not looked at it for over a year. One learns a lot in that amount of time.<br>
<br>
Are you asking for programming purposes, or for hacking an existing game? I keep everything in asm, hex files so it is easy to change or store since I know how it is loaded and arrange my data neatly. I can imagine that it would be much more difficult if hacking in a hex editor, which is well beyond my realm of expertise. The biggest thing would be to understand&#xA0;<em>how</em> they did things if so, and then investigate from there. If things are stored at the metatile level, in separate attribute pages, or whatnot.<br>
<br>
				</div><div class="mdl-card--border"></div>