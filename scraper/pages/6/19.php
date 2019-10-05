<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Aug 22, 2009 at 8:49:26 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You are loading too much background, which is extending into the attribute memory area.  You have 4 loops of 256 bytes which is 1024 bytes, but there&apos;s only 960 bytes of background tiles.  Need to change one of the loops to copy fewer bytes.
				</div><div class="mdl-card--border"></div>