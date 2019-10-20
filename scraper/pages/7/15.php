<div class="mdl-card__title"><strong>dutch</strong> posted on 
		
			
				
				Jul 21, 2008 at 7:47:24 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					There is a lot of stuff missing!
<br>
<br>What i did is this: comparing the controller/background asmfile with the pong asm file and check for differences. And try to make sense of it.
<br>
<br>From the top only the ines header is the same,then you get 
<br>* rsset/gamestate.rs 1/and state
<br>&gt; i believe this is the setup for variables(things that move and change) and constants (thing that don&apos;t change
<br>
<br>Then you get the usual setup like reset,vblank,clrmem etc...
<br>
<br>Then you get ball stats and stateplaying
<br>&gt; i believe this is a setup just like the palette/sprites/background/attribute needed for the ball movement( because i coundn&apos;t change the ball sprite)
<br>I did change the code a bit for paddle sprites (pic added)you could also ad background because thats missing.
<br>
<br>&gt; JSR drawscore for adding score points?
<br>&gt; cleaun up? clean up your mess
<br>
<br>&gt; Gameengine &gt;engine that needs to be added for tittle/game over and playing screen
<br>
<br>&gt;engineplaying here is a lot of information
<br>i think this is what the ball(mario&apos;s backhead) makes it moving all over screen
<br>
<br>BUT.........this is all guessing i have no idea if this is correct or how it works
<br>Just have to waith for bunny lessons
<br>
<br><a href="http://img329.imageshack.us/img329/2659/as002hd4.jpg" target="_blank" original-href="http://img329.imageshack.us/img329/2659/as002hd4.jpg">http://img329.imageshack.us/img32...</a>
				</div><div class="mdl-card--border"></div>