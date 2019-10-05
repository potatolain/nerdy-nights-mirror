<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Feb 16, 2013 at 9:33:42 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I think he set the palette just to show how the data is transferred. But the pallet entries at 0x3000 are the background, and 0x3010 are sprites. 16 bytes. Not all the bytes are there. Keep the background color the same for each 4th entry as writes are mirrored down (3010 goes to 3000 entry.) and will screw up if not written right.
				</div><div class="mdl-card--border"></div>