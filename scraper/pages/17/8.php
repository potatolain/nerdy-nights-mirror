<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Oct 24, 2009 at 6:05:57 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;ll take a closer look at the code when I have a little more time (ie, after the kid goes to bed), but right off the bat the call to sound_init looks fishy.  sound_init only needs to be called once, and normally you would call it on startup.  Try pulling the jsr sound_init out of the game engine code and sticking it somewhere in your reset code.
<br>
<br>Once your sound engine is initialized, you should never have to touch sound_init again.  Just call it once on startup and you&apos;re done.
				</div><div class="mdl-card--border"></div>