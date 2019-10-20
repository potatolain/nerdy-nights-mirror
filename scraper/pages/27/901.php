<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Feb 14, 2017 at 3:08:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	Looking for a good tutorial for doing collision detection for something similar to pool. All the tutorials I can find show you how to to collision detection if Object A hit Object B. But, I&apos;m looking at what if Object A and Object B have 4 parts a piece that different things happen. So, like in pool, if the cue ball sticks the 8 Ball at a certain angle and speed, the collision could happen on different points of each ball. This would cause each ball to travel at certain angles at different speed based on the original speed of the cue ball. Let&apos;s say you hit the 8 ball dead on, the 8 ball absorbs nearly all of the blow and travels straight at the same rate of speed that cue ball was. The cue ball would nearly come to a complete stop. However, let&apos;s say you clip the side of the 8 ball, it would travel at a much lower rate of speed at a 90 degree angle in comparison to the cue ball. The cue ball would lose a bi of speed and glance off the 8-ball at a small angle. I would imagine pinball and bowling have the same challenges. Thanks for any input you have!</div>
<br>
<br>
So, you have a point, following a line, with a given vectorial speed.<br>
<br>
I have never done that, but I think that you will need 2 variables: speed, angle; plus likely another 2 variables to do the math: x offset, y offset. About angle few posts above there is a link provided by Shiru.<br>
<br>
I prefer to think in terms of points on a surface rather than sprites.<br>
<br>
Bunnyboy made a pinball game, probably he can help more.<br>
<br>
If you need a demo, let me know, I can try to do something working.<br>
<br>
<br>
How much ROM you can waste with lookup tables?<br>
How many possible directions? 8, 16, 256?<br>
<br>
Disclaimer: not a programmer academically wise, so my solution maybe are not the best.<br>
<br>
Edit: added questions, correction.
				</div><div class="mdl-card--border"></div>