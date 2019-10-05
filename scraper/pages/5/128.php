<div class="mdl-card__title"><strong>Baka94</strong> posted on 
		
			
				
				Sep 4, 2014 at 3:07:07 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I guess it&apos;s time to see if I understand how the controller reading works. Each time you read a controller the NES cycles through the buttons (since it only uses bit 0 for this) and I need to store each button state to separate memory slot where the game itself reads the buttons. Is this correct?
<br>
<br>BTW, do I need to write the 0 and 1 to the $4017 if I want to use controller 2 too, or does writing to $4016 set up both controllers?
				</div><div class="mdl-card--border"></div>