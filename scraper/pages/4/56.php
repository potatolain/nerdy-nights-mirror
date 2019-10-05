<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Feb 17, 2013 at 2:30:27 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The data is put together and the put together data makes each pixel 2 bits. That&apos;s 4 different pixel values, which are then displayed as colors. 16 entries for $3000 (4 palettes of 3 colors+the universal color.), and 16 entries for $3010 (4 palettes of 3 colors, value 00 is transparent.) It uses 16 bytes per tile, and 2 bits per pixel. The palette for sprites is selected by OAM bits on the 2nd byte of OAM ($201,205,etc.), and the background color pallets are selected by attribute memory at the end of the nametable. Then it pulls the tile, and uses each of the 2 bits to pull the color. Sprite pixel 0 (00) is transparent. And the background tile color $00 is always pulled from $3000, also called the &quot;universal&quot; background color.
				</div><div class="mdl-card--border"></div>