<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				May 12, 2016 at 12:25:53 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yes, thats everything in NMI. You are on the right track with logic in the main loop.<br>
You want to use the NMI for PPU updates. Run AI, poll controller(s), buffer gfx updates e.t.c.<br>
outside the NMI, or outside VBlank to be more specific.
				</div><div class="mdl-card--border"></div>