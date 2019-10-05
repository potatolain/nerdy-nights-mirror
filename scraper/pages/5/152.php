<div class="mdl-card__title"><strong>Piputkin3</strong> posted on 
		
			
				
				Apr 26, 2017 at 11:02:58 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have a problem because when using BEQ, if the button is not pressed then this code is executed below<br>
<br>
ButtonA:<br>
LDA $4016<br>
AND #%00000001<br>
BEQ ButtonB<br>
LDA $0210<br>
CLC<br>
ADC #$01<br>
STA $0210<br>
;Works regardless of the status of the button<br>
ButtonB
				</div><div class="mdl-card--border"></div>