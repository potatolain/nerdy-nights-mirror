<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 17, 2008 at 6:13:17 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thats where the CLC and SEC instructions right before the add and subtract come in.
<br>
<br>ADC stands for ADd with Carry.  It is actually doing A + value + carry.  Before doing the add you CLear Carry (CLC) so it does A + value + 0.
<br>
<br>SBC is SuBtract with Carry, A - value - opposite of carry.  Before doing the subtract you SEt Carry (SEC) to 1.  Opposite of carry will now be 0,  so it does A - value - 0.  
<br>
<br>When going left you are probably doing CLC before the SBC.  That clears the carry, so the subtract is doing A - value - 1.  Thats where the extra speed comes in because you end up subtracting 2 instead of 1.
				</div><div class="mdl-card--border"></div>