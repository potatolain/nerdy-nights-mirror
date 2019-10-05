<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jan 6, 2010 at 6:12:24 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Before your controller loops, you want LDX #$08 instead of LDA #$08.  Otherwise who knows how many times that loop is running, erasing the button data.
				</div><div class="mdl-card--border"></div>