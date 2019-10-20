<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 30, 2014 at 7:00:38 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have pretty crazy excel spreadsheets, once they are set up I can change setup values and the whole table will recalculate.  Here is one from xmas 2013: 
<br>
<br><a href="https://docs.google.com/spreadsheets/d/1KQ1B-LdA9CKU3cxCmbswsFk2r0TIjzcdSc1ZaWkY36g/edit?usp=sharing" target="_blank" original-href="https://docs.google.com/spreadsheets/d/1KQ1B-LdA9CKU3cxCmbswsFk2r0TIjzcdSc1ZaWkY36g/edit?usp=sharing">https://docs.google.com/spreadshe...</a>
<br>
<br>It is one of the enemy movements where it does a figure 8 that drops down the screen towards the player.  &quot;dist between points&quot; sets the width, &quot;frames&quot; is how long it takes to do a complete cycle, &quot;drop speed&quot; is how much each step drops down the screen.  First the index row sets up the calcs for each frame.  Index*drop is how much to add to the normal figure 8 equation.  &quot;t angle&quot; is the 360 degrees of a circle divided into how many frames there are.  &quot;bernoulli&quot; is the crazy figure 8 equation.  &quot;x/y offset&quot; is how far each step moves, which gets truncated then converted to hex to copy/paste into a data file.  &quot;x/y abs&quot; is all those offsets added together to make the chart so everything looks good.  
<br>
<br>If I wanted it to move faster I just reduce the frames number and everything else is automatically changed.  Or to do figure 8 with no drop the speed is set to 0.  I have a separate sheet for each movement type, circles/parabolas/spirals/sin waves/etc.
				</div><div class="mdl-card--border"></div>