<div class="mdl-card__title"><strong>DamienC666</strong> posted on 
		
			
				
				Mar 13, 2013 at 11:21:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>thefox</b></i><br>
	<br>
	The code assumes that $300-$3FF is used for shadow OAM (that is copied to the real OAM later with OAM DMA, PPU register $4014). Initializing OAM to $FE causes all sprite Y positions to be 254, placing the sprites offscreen. Alternatively any other value between 239..255 ($EF..$FF) could be used to the same effect.</div>
<br>
I gotcha, that makes perfect sense. All these mirrored sections of memory kind of throw me off a bit.<br>
<br>
Thanks.<br>
				</div><div class="mdl-card--border"></div>