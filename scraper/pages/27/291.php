<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				May 23, 2014 at 12:59:03 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					1. Make an object system, but you&apos;re talking hundreds of lines of code and a game engine, so not exactly easy. Or hardcode them all.
<br>
<br>2. Set the Y position of the sprite to $FF. Sprites not displayed need to always be set to $FF.
<br>
<br>3. Set up a counter, each time one is removed, set the Y position to FF, then increment it. Unless we increment to the value of 4, it&apos;s not done. Any sprite with an FF position, skip moving it or collision detecting it.
				</div><div class="mdl-card--border"></div>