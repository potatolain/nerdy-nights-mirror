<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				May 30, 2014 at 6:01:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>bunnyboy</b></i><br>
	<br>
	Yup, any fixed curved path is pretty easy with look up tables. You can either do the difference to add/sub each frame, or just the absolute pixel position. All mine were deltas so a character moving in a circle could also be moving left/right. I split each movement into X frames, then gave each character a frame counter, and make it either loop or reverse at the end. Big circle is divided into 256 steps, a smaller circle might get only 100 so they both take the same amount of time for 1 revolution. The character can either keep circling or bounce and change direction each time.<br>
	<br>
	If you look at Galaga, a set of bugs all follow the same path (simple look up table) to a certain point then branch out straight to their ending spot (simple math).</div>
<br>
And how do you make such lookup tables?<br>
<br>
				</div><div class="mdl-card--border"></div>