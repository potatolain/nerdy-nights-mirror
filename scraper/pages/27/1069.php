<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Oct 07 at 2:37:01 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					My gamestate NMI is generally empty, depending on the gamestate. When it is needed it only does absolutely what is essential, like drawing background tiles. Any normal stuff like reading the controller, incrementing a single counter like a random seed, music, etc. all runs in a separate NMI space. See MRN&apos;s tutorials for what that might look like (thanks buddy, still using your basic setup six years later!).
<br>
<br>These days I also split things like scroll writes, sprite 0 hits, and delay loops off from normal and gamestate NMI, which having NMI already in a separate area helped a lot with. Any time that you have to sit there and find a bunch of different ways to work around your own code it is probably time to start splitting things off.
				</div><div class="mdl-card--border"></div>