<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Mar 17, 2014 at 10:54:28 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>chowder</b></i><br>
	<br>
	then using tile_x * 32 + tile_y, but it doesn&apos;t seem to be working properly.</div>
It should be tile_y*32 + tile_x. Also you have to use 16-bit arithmetic because the result doesn&apos;t always fit in 8 bits.<br>
				</div><div class="mdl-card--border"></div>