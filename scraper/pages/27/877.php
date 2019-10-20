<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jan 12, 2017 at 7:18:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Depending on the game, this can be done a couple of ways I can think of, others may have better ideas.
<br>
<br>1. Keep a working copy of the current background in memory. Change memory to reflect the background on any update. It will take a lot of memory, but it works. The just write a routine that tracks where in memory it needs to read from. This is probably most useful in scrolling games as the box may popup in different spots.
<br>
<br>2. Know exactly where your text boxes come up and just hard code copy of the background data in PRG and just call that data when you want close the text box. Best on screens that don&apos;t scroll or update the background.
<br>
<br>3. Last idea, similar to number 2, but you don&apos;t have to duplicate data.  Just create a label in the middle of your current background data table in PRG at the start of where the text box was. Again, has to be in a place where the background doesn&apos;t change and you know exactly what data needs replaced.
				</div><div class="mdl-card--border"></div>