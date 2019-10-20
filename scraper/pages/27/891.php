<div class="mdl-card__title"><strong>Beep Boop!</strong> posted on 
		
			
				
				Jan 25, 2017 at 8:44:05 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yep, some people throw music engine there. I have a software stack and a queue on the lower 128 bytes of the stack.
<br>
<br>It&apos;s OK to use but you need to be sure your code is 100% solid, without any stray push/pop (ie PHA in every frame but no PLA) because it will be impossible to recover if important data is rewritten to garbage. Most of the time the stack barely used 32 bytes, much less the full 256.
				</div><div class="mdl-card--border"></div>