<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Jan 22, 2014 at 2:34:03 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You&apos;ll likely want to keep all the sprites in the Sprite_RAM+XXX thinking when you get to making collision detection engines.  Just have two routines, one that updates the hero and others that update the bad guys.  Just start the badguy update loops at Sprite_RAM+4 instead of Sprite_RAM+0.
				</div><div class="mdl-card--border"></div>