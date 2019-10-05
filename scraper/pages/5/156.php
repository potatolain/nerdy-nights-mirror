<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 26, 2017 at 12:08:31 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Do you have this before ButtonA: 
<br>
<br>LatchController:
<br>  LDA #$01
<br>  STA $4016
<br>  LDA #$00
<br>  STA $4016       ; tell both the controllers to latch buttons
<br>
<br>All of those BNEs need to be BEQs on buttons B, Select, Start, Up, Down, Left, Right. Button A looks correct.
				</div><div class="mdl-card--border"></div>