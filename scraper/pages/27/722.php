<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Jan 19, 2016 at 3:36:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					That sounds like a recipe for fragile code to me! Better to make your nmi routine robust and carefully use flags for notifying your main loop when the nmi has finished and flags for locking access to the PPU. Actually, what this really sounds like to me is you&apos;re doing too much in nmi---try breaking out some of that logic to your main loop, filling a few small buffers, then blasting those buffers to the PPU within nmi.
				</div><div class="mdl-card--border"></div>