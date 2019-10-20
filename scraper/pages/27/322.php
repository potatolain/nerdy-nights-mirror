<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				May 30, 2014 at 1:29:37 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Vectrex280996</b></i><br>
	<br>
	I have a little question... What would be the most effective way of moving a sprite in a circle?</div>
The easiest way would be to write a program in your favorite support language that generates a look up table of fixed point values for points on a circle for the radius and resolution you desire. These points would be generated around the origin and then you can just add each point to the point around which you want your sprite to orbit.<br>
<br>
There&apos;s another way that involves generating (in 6502, not pre-generated LUT) sinusoidal motion on the X and Y axes, and having the sinusoid motion of each axis intersect such that it creates approximately circular motion, but it is hard to explain, and also hard to work with and tweak. But it can generate some neat effects (lightning balls that Boulder fires in Nomolos move this way, in slowly expanding spiral motion)<br>
<br>
I like to work with 24 bit coordinates. 16 bits for world coordinates and 8 bits for fine sub pixel precision. My velocities are typilcally 16 bits , and when I add them to the 24 bit coordinates I sign extend for the highest byte in the coordinates, where the two bytes of the velocity are added to the two lowest bytes of the 24 bit coordinates. I like this approach because I don&apos;t have to do any bit twiddling, and it is simple.<br>
<br>
There may be other ways of creating circular movement. The two approaches I mentioned have worked great for me so I haven&apos;t yet bothered to research it further. If all you need is a tight circle that doesn&apos;t change in radius, I&apos;d reccommend the first approach.
				</div><div class="mdl-card--border"></div>