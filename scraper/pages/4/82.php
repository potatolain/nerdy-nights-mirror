<div class="mdl-card__title"><strong>NESHomebrew</strong> posted on 
		
			
				
				Jan 3, 2015 at 11:47:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dredster</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>KHAN Games</b></i><br>
		<br>
		Basically when you play a Nintendo game, the player isn&apos;t a square is he? Mario has a shape, Link has a shape, etc, etc. Without a transparent color to tell the Nintendo which pixels to draw invisible, everything would be a square or rectangle.</div>
	<br>
	ahhh, that makes sense now. There are only two paletes one for sprites and one for background ? All colors that are represented within a game exist within these two palettes ? Their adress in the PPU is brought up by the accumulator through operands in the PRG Rom. Does that make any sense ? Am I getting this at all ?</div>
Not really. &#xA0;You have 4 different palettes for sprites, and 4 different palettes for backgrounds. &#xA0;Each of these palettes are made up of 3 colors, plus the background color. &#xA0;In the sprite palette, the background color is actually transparent, so if a sprite is on top of the background, the background will show through.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>