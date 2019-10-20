<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 30, 2014 at 2:09:50 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>GradualGames</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Vectrex280996</b></i><br>
		<br>
		I have a little question... What would be the most effective way of moving a sprite in a circle?</div>
	The easiest way would be to write a program in your favorite support language that generates a look up table of fixed point values for points on a circle for the radius and resolution you desire. These points would be generated around the origin and then you can just add each point to the point around which you want your sprite to orbit.</div>
That is what I did for the xmas 2013 game. &#xA0;ROM is cheap and CPU time is limited, so pre calculated look up tables was the only way to get that many objects moving at once. &#xA0;I just did formulas in Excel to generate the tables. &#xA0;Circles, spirals, figure 8s, etc were all done with only slightly crazy maths. &#xA0;Every level has a global movement table (like moving left/right) and then each object uses its own table (like circles).<br>
<br>
				</div><div class="mdl-card--border"></div>