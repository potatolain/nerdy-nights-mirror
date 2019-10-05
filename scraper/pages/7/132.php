<div class="mdl-card__title"><strong>KennyB</strong> posted on 
		
			
				
				Dec 27, 2012 at 3:33:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Can anyone help me (or point me in the right direction):<br>
<br>
I changed the ball speed to 2/3/4/5/6 to make it go faster.<br>
But at these higher speeds, the ball will change direction before or after the &quot;walls&quot; I programmed.<br>
They seem to have an offset. For the right and top wall it will change direction before it should hit the wall. And for the left and bottom wall it will change direction after it should hit the wall.<br>
<br>
(I think) I know why it does this ==&gt; If the ball is, for example, 1 pixel before the wall ==&gt; No collision ==&gt; Increase the position of the ball with 5 (speed of the ball).<br>
This means that the ball will be bounced and shown 4 pixels beyond the wall. But I don&apos;t know why the ball will change direction before hitting the right and top wall, but it will most likely have something to do with the difference in subtracting (right/top wall) and adding (left and bottom wall) the speed ?<br>
<br>
<br>
My first thought (and attempt to fix it) was to create a loop for the movement + collision checking and have it repeat X amount of times.<br>
<br>
Pseudo code:<br>
While x not equal to speed<br>
Move by 1 pixel (left/right/up/down)<br>
Check collision (if wall is hit ==&gt; reverse directions)<br>
Increase X<br>
<br>
This code would make the sprite move by 1 pixel a time and check every time if it hit&apos;s a wall and change direction.<br>
So I tried to code it but it didn&apos;t seem to work (or I implemented it wrong)<br>
<br>
Is this the correct way to solve my problem ? (before I put a lot of time figuring out how to implement the code correctly)&#xA0;<br>
Also; at which frequency will my game run ? At 50/60 fps (when the NMI resets) ? Is it then usefull to create the loop ?&#xA0;<br>
<br>
<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>