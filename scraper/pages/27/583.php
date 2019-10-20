<div class="mdl-card__title"><strong>dra600n</strong> posted on 
		
			
				
				Jun 8, 2015 at 11:43:07 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br><br>I&apos;m still trying to figure this out conceptually, but what would be needed to have a projectile shoot diagonally. Not 8-directional diagonally, but any angle. What I am going for is something similar to what the Zoras do in Zelda (finding the player&apos;s position, and then shooting a projectile to that location). Not every angle will be able to be accounted for, I&apos;m guessing, and there will probably be some safe spots, but any advice to get on track with this would be great! I have mostly wiporked with four direction movement, so I&apos;m still figuring out some of the complexities that come with switching to eight directions. Thanks!</div><br><br><br>
What I would do is get the players position, then the starting position of the projectile, and run the movement through a quick algebraic equation. I wouldn&apos;t use a lookup table unless the players position never changes.
				</div><div class="mdl-card--border"></div>