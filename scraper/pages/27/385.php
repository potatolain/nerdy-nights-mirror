<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Aug 28, 2014 at 9:10:25 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					There&apos;s a number of different ways of doing it.  One way would be to make a section of RAM your collision table.  Just update the appropriate address as you load new background and make sure your character is referenced to the appropriate scroll point.  i.e. instead of reading from the original background data in ROM, load the collision data into RAM.
				</div><div class="mdl-card--border"></div>