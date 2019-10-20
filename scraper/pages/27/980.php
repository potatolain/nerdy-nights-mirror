<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Nov 15, 2017 at 10:07:59 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Has anyone here attempted sprite movement in isometric view? I&apos;m having an issues with sprites jumping across the screen with the Y coordinate. Basically, the equation to convert from Cartesian coordinates (2d top-down map) to Isometric (on screen coordinates) is IsoY = (CartX + CartY)/2. Whenever (CartX + CartY) sets the carry flag going up (CartY rolls over from $00 to $FF), you must use LSR to divide by 2 to drop the carry flag so your sprite doesn&apos;t jump to the bottom of the screen. Whenever (CartX + CartY) sets the carry flag going down, I have to do ROR to divide by 2 so that the IsoY coord is $80 and not $00 and jumps the sprite back to the top of the screen. 
<br>
<br>Anyone have any experience in the best way to tackle this problem?
				</div><div class="mdl-card--border"></div>