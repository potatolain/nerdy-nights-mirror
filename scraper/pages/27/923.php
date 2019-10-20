<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Aug 26, 2017 at 10:09:52 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					That makes sense. &#xA0;So is pointer the high byte and y is adding the low byte? So:<br>
<br>
(psudeocode)<br>
$2000 = #$0F<br>
pointer = $20 (highbyte)<br>
LDA [pointer], y = LDA #$0F<br>
<br>
Is this correct? &#xA0;That way you could keep incrementing y to get the next address?
				</div><div class="mdl-card--border"></div>