<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Jan 8, 2015 at 4:55:41 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Reading back VRAM to do collision detection is not something that you can see often, as you may need these reads with arbitary and relatively long delays between reads, while reading VRAM is only possilbe in the VBlank. Usually collision routines either do direct access to the map data, or use a RAM buffer for the current screen data.
				</div><div class="mdl-card--border"></div>