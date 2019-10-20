<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 17, 2016 at 10:28:28 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Well, you do with it whatever you want to do, who knows that better than you?
<br>
<br>You need to aim a shot to player? You need a system that allows projectiles to move at some angle rather than straight lines. Like, you need fixed point coords, with some bits for fraction part of the axis speed, and two deltas, also in fixed point. Now, to aim you need to use atan2 function to find angle between player coords and enemy coords. Using this angle, you can find deltas to move towards the target using a sin/cos table and optional multiplication (if you need different speeds for shots).
<br>
<br>You may also want to implement homing missile. In this case you use the angle not directly, but as desired value. In this case the projectile needs to use angle instead of the deltas, and adjust it gradually trying to &apos;rotate&apos; it to the desired one in fastest way (i.e. you need to determine which direction of rotation will reach the desired angle faster).
<br>
<br>For your information, I have no slightest clue about trigonometry, or algebra, or math more complex than add/sub/mul/div. These things dont&apos; really require understanding of the underlying math, just use cases for functions. It happens at intuitive level. Like, try to start from learning how to draw a circle using sin/cos and angle (basically boils down to x=size*sin(angle); y=size*cos(angle); with angle changing from 0 to 360), and you&apos;ll get better understanding of the thing.
				</div><div class="mdl-card--border"></div>