<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Aug 3, 2012 at 4:33:54 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					One thing that&apos;s jumping out at me is at the end of your gamestates, you&apos;re doing a JMP straight back to your GameEngine, where you should be doing a JMP to GameEngineDone.  I don&apos;t think your code is even getting to any of your other subroutines.
				</div><div class="mdl-card--border"></div>