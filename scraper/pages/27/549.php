<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Mar 17, 2015 at 5:15:55 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					When it starts up the CPU reads $FFFC/FFFD (the reset vector) and jumps to that address.  It is up to the programmer to make sure that points to valid code, usually in a fixed bank.  If there are no fixed banks then either the mapper needs to start up with known banks or the programmer has to put reset code in every bank.
				</div><div class="mdl-card--border"></div>