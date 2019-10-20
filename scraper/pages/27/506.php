<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Feb 4, 2015 at 10:14:54 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	This is something that has always given me trouble (along with sprites in general), but what would be some different ways to program autonomous sprite movement? I understand getting something to move through player input, or even if it is hard coded from the get go (as in the ball in Pong), but what if one wants more control? Just to keep things simple, say when the A button is pressed, the player sprite walks several steps and then stops. At the moment, all I can get him to do is jump to a new location. Any help would be great!</div>
A conceptual-only attempt to help.<br>
<br>
Programming AIs kind of behavior is fun and interesting to do, but time consuming to code and test out.<br>
<br>
I see 3 solution at first glance, surely there are more and maybe better ones:<br>
<br>
1. have countdown timer. When pushing A the motion starts following a set pattern and the timer is set, each NMI the timer decreases, when reaching 0 the motion ends.<br>
<br>
2. have a target x/y coordinates. When pushing A the motion starts following a set pattern, and each NMI the game check if the target x/y coordinates are reached (note: be careful on &quot;exact&quot; target coordinates, if the object can bypass them try to set as target the &quot;box&quot; inside x1 x2 y1 y2).<br>
<br>
3. have a set of instruction. When pushing A the motion starts following a set pattern on the first instruction, and each NMI the game check if the instruction is done and shifts to the next, the last instruction will be an arbitrary opcode (fi. FF) meaning &quot;task completed&quot;.<br>
				</div><div class="mdl-card--border"></div>