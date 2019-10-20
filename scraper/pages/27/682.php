<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Oct 19, 2015 at 5:25:46 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I had an idea for a map system for a 256-room level, with 4 &quot;floors&quot; of 64 rooms. Rather than using 256 bytes of RAM for that map, you can just use 32 bytes by setting bits on and off. Let&apos;s say you are in the room below at X=5 Y=6
<br>
<br>00000000
<br>00000000
<br>00001000
<br>00000000
<br>00000000
<br>00000000
<br>00000000
<br>00000000
<br>
<br>Then let&apos;s say you go to X=6 Y=6. You only have to set one bit to mark the spot on the map. It&apos;s simple, convenient stuff like that that saves RAM. That&apos;s also part of the fun of programming, you have so many ways to make stuff work but the goal is to find the best way to make your stuff work.
<br>
<br>00000000
<br>00000000
<br>00001100  ;Set the bit here
<br>00000000
<br>00000000
<br>00000000
<br>00000000
<br>00000000
				</div><div class="mdl-card--border"></div>