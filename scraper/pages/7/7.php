<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jun 24, 2008 at 1:49:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Your NMI just has to finish (RTI) before the next NMI triggers, one full frame later.
<br>
<br>What you have to worry about is running out of vblank time, which is why all the graphics updates are done at the beginning of NMI.  Once vblank is done you can&apos;t do more graphics updates, but you can still run the rest of your engine.  If you see a game slow down during high action, that is usually the engine time going too long so the graphics updates for that frame arent done.
				</div><div class="mdl-card--border"></div>