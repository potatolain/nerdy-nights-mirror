<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Sep 15, 2015 at 6:17:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<a href="http://wiki.nesdev.com/w/index.php/PPU_registers" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/PPU_registers">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
As you can see from this wiki, the $2001 address is the address where the color emphasis is located.<br>
<br>
If you wanted to write actual text on the screen, as in HELLO WORLD, (assuming you were writing to the background, and not using sprites), first you would load $2002 to get the PPU ready, and then you would be using the $2006/$2007 registers to tell it where the text goes, and what background tiles contain those letters.<br>
<br>
You&apos;ll find out that you are basically using the same registers all the time when it comes to the NES. &#xA0;Some for sprites, some for background, etc.
				</div><div class="mdl-card--border"></div>