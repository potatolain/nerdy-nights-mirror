<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Dec 21, 2013 at 12:24:26 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yeah, using the flip flag is tricky.  It flips each individual tile in their current locations.  It doesn&apos;t know that you&apos;re using four tiles to make up your sprite.
<br>
<br>So you&apos;ll need to do:
<br>
<br>When facing right (assuming your character starts at $0300):
<br>  $0301 - top left sprite        ;not flipped.
<br>  $0305 - top right sprite
<br>  $0309 - bottom left sprite
<br>  $030D - bottom right sprite
<br>
<br>When facing left:
<br>  $0301 - top right sprite (flipped)
<br>  $0305 - top left sprite (flipped)
<br>  $0309 - bottom right sprite (flipped)
<br>  $030D - bottom left sprite (flipped)
				</div><div class="mdl-card--border"></div>