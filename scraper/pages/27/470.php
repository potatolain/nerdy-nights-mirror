<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Dec 29, 2014 at 12:30:06 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Collision detection needs only a few accesses to the background so you can decompress as needed.  Dragon Warrior uses RLE for a full row of tiles, then has a pointer table to the start of each row.  To find an X/Y tile you look up the right row (Y) then decompress until you hit the right tile (X).
				</div><div class="mdl-card--border"></div>