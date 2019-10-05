<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Oct 3, 2009 at 11:15:37 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I think you&apos;re confusing &quot;turning off the NMI&quot; and &quot;turning of the PPU&quot; a little bit.
<br>
<br>Turning off the NMI is done by clearing bit 7 of $2000, and will stop the NMI from interrupting the game at the beginning of each vblank.
<br>
<br>Turning off the PPU is done by clearing bits 3 and 4 of $2001 (background and sprite rendering) and it will stop the PPU from rendering background tiles and sprites.  In other words, turning the PPU off will mean that nothing gets drawn to the screen at all (black screen).
<br>
<br>You can turn the PPU off and still have the NMI running.  Any graphics updates you do while the PPU is off won&apos;t show until you turn it on again, but if you have any non-graphics code in the NMI (sound engine being a common example), it will still get run when it needs to be run.
<br>
<br>Yeah, if you are loading a full 256 tiles all at once, turning off the PPU is the only way to do it.  You can make it look smoother by fading your palettes to black before you turn the PPU off.
<br>
<br>Anyway, to address your original problem, it is very possible to load the background circles once, and then be able to update the smaller insides without turning off the PPU.  It just might take more than one frame depending on how many tile updates you have.  You might have to do something like this:
<br>
<br>update box 1
<br>wait for next frame
<br>update box 2
<br>wait for next frame
<br>update box 3
<br>
<br>Each frame is only a fraction of a second, so the player won&apos;t be able to tell.
				</div><div class="mdl-card--border"></div>