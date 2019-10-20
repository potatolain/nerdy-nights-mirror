<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				May 23, 2014 at 9:12:47 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dimeback</b></i><br>
	<br>
	I&apos;ve made a sprite where it shoots 4 bullet sprites in all four directions. There were a few things I was wondering though:<br>
	Is it possible to redraw the bullet sprite 3 times without having it take up space in the sprite memory? Each bullet uses the same tile with the same attributes and starting positions.<br>
	<br>
	Is there any way to legitimately hide the bullet sprites when they aren&apos;t being fired? By that I actually mean turning the sprites off or making them invisible (and turn on/reappear when they are shot) rather than hiding them behind the 16x16 metasprite they are shot from, which is the trick I currently use. (Or is the trick I use the only/best way?)<br>
	<br>
	I have collision points set up for the bullets so that when they reach a certain part of the screen they will go back to hiding behind the sprite so they can be fired again. I want to make it so that all four bullets are only fired after the previous 4 bullets have successfully collided and gone back to that hiding state, but with the code I have now, once one bullet collides with a wall, all of the other bullets will automatically return to that hiding state and fire again.</div>
<br>
First, each sprite you want to display on the screen will require some sprite memory.&#xA0; You just have to track them as required.&#xA0;<br>
<br>
You need to program to be offscreen when they are inactive.&#xA0; If you don&apos;t, you&apos;ll end up with flickering or a problem if there&apos;s not an active sprite to hide them behind.&#xA0; Just throw $FE in the four bytes for that sprite.<br>
<br>
Don&apos;t use the counter 3Gen suggests, that&apos;s not necessary.&#xA0; Simply check the sprites you want to use for the bulletts to see if they are &quot;inactive&quot;&#xA0; i.e. if they are in the $FE position, they are inactive.&#xA0; If all 4 (or really whichever you want to use) are inactive, tell the routine to fire.&#xA0; Otherwise, skip firing for that frame.&#xA0; Same thing if you want to only fire in a direction if the bullett for that direction is inactive.&#xA0;<br>
<br>
<br type="_moz">
				</div><div class="mdl-card--border"></div>