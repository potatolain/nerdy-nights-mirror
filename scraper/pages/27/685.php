<div class="mdl-card__title"><strong>sempressimo</strong> posted on 
		
			
				
				Oct 29, 2015 at 4:50:03 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi, this is my code for determining the tile (8x8 pixels) the player is on. Basically what I am trying to do is (x + y * 32), so that later I can look it up in the tiles array (.db)<br>
<br>
I am not sure if ASL (five times would be the same as * 32).<br>
<br>
CalcTargetTileNumber:<br>
<br>
&#xA0; ; Update the player positional variables<br>
&#xA0; ; Divide by the tile size (8)<br>
&#xA0; LDA playerx<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; STA player_tile_x<br>
<br>
&#xA0; LDA playery<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; STA player_tile_y<br>
&#xA0;<br>
&#xA0; LDA player_tile_y<br>
&#xA0; ASL A ; multiple by 32?<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; CLC<br>
&#xA0; ADC player_tile_x<br>
&#xA0; STA target_tile_number<br>
<br>
&#xA0; RTS
				</div><div class="mdl-card--border"></div>