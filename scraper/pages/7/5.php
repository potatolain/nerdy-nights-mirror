<div class="mdl-card__title"><strong>Zzap</strong> posted on 
		
			
				
				Jun 9, 2008 at 7:54:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Technically, the JSR will push the program counter (the pointer to where the program is currently running) onto the stack before moving the program counter to the subroutine location, and the RTS pops it back off the stack. So an RTS without a JSR would try to pop a number off the stack and start running from there (probably result in a crash).
				</div><div class="mdl-card--border"></div>