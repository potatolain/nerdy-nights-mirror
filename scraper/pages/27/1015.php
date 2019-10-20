<div class="mdl-card__title"><strong>Sumez</strong> posted on 
		
			
				
				Mar 8, 2018 at 2:01:19 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yes, if you have 16px metatiles for collision checking, there are most often 17 visible column offsets your character could be positioned in. Fortunately there are only 15 vertical rows, so technically you should still be able to do with an 8-bit index from your starting offset.
<br>
<br>However, if you&apos;re doing horizontal scrolling anyway, there are essentially many more columns your character could be in. So instead of basing your offset on the scroll amount maybe start out using your characters X position (in world coordinates, not the sprite&apos;s screen coordinates) to determine which column it is in out of the entire stage, and use that as offset?
<br>
<br>What I did for my own multi-purpose scrolling engine, was storing the stage into &quot;room&quot; sized metatiles, each representing a full visible 256x240 NES background, so whenever I check collisions of a single pixel, I start out using the high byte of its X position to find out which &quot;room&quot; it is in, and use that for offset.
				</div><div class="mdl-card--border"></div>