<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Oct 30, 2014 at 5:43:50 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					IIRC, and I may not cause I&apos;m dumb, but NMI is just a notification.  It will jump to your NMI vector EVERY time the notification hits.  So, if you&apos;re going to stick a bunch of shit in NMI, you need to disable it first thing then re-enable it last thing.  This will keep it from interrupting it&apos;s self.  
<br>
<br>The system has no way of knowing if you&apos;ve finished your operations or not and called RTI.  NMI is just that, an interrupt.  It will jump to the vector and it&apos;s up to you to return from it.
				</div><div class="mdl-card--border"></div>