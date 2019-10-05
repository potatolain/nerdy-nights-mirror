<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jun 30, 2012 at 9:49:54 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m not sure what you&apos;re doing, but that&apos;s a terrible way of reading the controller. Just realize the right way to do it is to get all the data in one byte then do your bit masks with it, not straight off of $4016 like it is doing.<br>
<br>
But the reason it moves it different ways is because each of the 64 OAM data values goes $200=Y location,$201=Tile,$202=Sprite Attribute,$204=X location.
				</div><div class="mdl-card--border"></div>