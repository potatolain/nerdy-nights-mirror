<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				May 18, 2013 at 6:09:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DoNotWant</b></i><br>
	<br>
	I have a question. Is it common to interpret a value as a 2&apos;s complement signed number,<br>
	and use the negative values for left movement and positive values for right movement?</div>
Yes.<br>
<br>
<div class="FTQUOTE" style="width: 529.59375px;">
	<i>Originally posted by:&#xA0;<b>DoNotWant</b></i><br>
	<br>
	Could you then get away with just adding a value to the sprite&apos;s X value every time you move?<br>
	You know, instead of having to branch and subtract if you want to move left?<br>
	An example or explanation of sub-pixel movement would also be nice.</div>
Yes. Basically your signed number would be the X velocity here.<br>
<br>
To get sub-pixel movement you would make the velocity a fixed point number, for example 8.8 fixed point (8 bits for the whole part, 8 bits for the fractional part, 16 bits total). The position also needs a fractional part, so you would make that a fixed point number as well.<br>
<br>
Then just add the velocity to the object position on every frame, and modify the velocity depending on which direction you want the object to move. If you add a constant value to velocity on every frame, you get acceleration/deceleration.
				</div><div class="mdl-card--border"></div>