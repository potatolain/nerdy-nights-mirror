<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 27, 2017 at 11:33:46 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Just have the sprite move more pixels per frame.<br>
<br>
If your character is moving 1 pixel per frame, increment the missile to move 2 pixels per frame.<br>
<br>
Example for:<br>
Character<br>
LDA $0200<br>
CLC<br>
ADC #$01<br>
STA $0200<br>
<br>
Missile:<br>
LDA $0210<br>
CLC<br>
ADC #$02 ;Twice as fast<br>
STA $0210
				</div><div class="mdl-card--border"></div>