<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 26, 2017 at 11:21:49 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>Piputkin3</b></i><br>
<br>
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
ButtonB</div>
Last line needs a colon.<br>
<br>
ButtonB:<br>
<br>
&#xA0;</div>
<br>
<br>
Can you post your enitre Read Controller code for all buttons? I don&apos;t think this is giving me enough information.
				</div><div class="mdl-card--border"></div>