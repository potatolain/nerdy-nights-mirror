<div class="mdl-card__title"><strong>Dimeback</strong> posted on 
		
			
				
				May 23, 2014 at 12:37:23 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;ve made a sprite where it shoots 4 bullet sprites in all four directions.  There were a few things I was wondering though:
<br>Is it possible to redraw the bullet sprite 3 times without having it take up space in the sprite memory?  Each bullet uses the same tile with the same attributes and starting positions.
<br>
<br>Is there any way to legitimately hide the bullet sprites when they aren&apos;t being fired?  By that I actually mean turning the sprites off or making them invisible (and turn on/reappear when they are shot) rather than hiding them behind the 16x16 metasprite they are shot from, which is the trick I currently use. (Or is the trick I use the only/best way?)
<br>
<br>I have collision points set up for the bullets so that when they reach a certain part of the screen they will go back to hiding behind the sprite so they can be fired again.  I want to make it so that all four bullets are only fired after the previous 4 bullets have successfully collided and gone back to that hiding state, but with the code I have now, once one bullet collides with a wall, all of the other bullets will automatically return to that hiding state and fire again.
				</div><div class="mdl-card--border"></div>