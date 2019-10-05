<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jan 12, 2012 at 4:18:00 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Basically he&apos;s setting a specific value to each state the game is in, so you don&apos;t have to keep track of which state is which number.
<br>
<br>It&apos;s a lot easier to program for months on end and tell the game:
<br>
<br>&quot;LOAD STATEGAMEOVER
&quot;<br>
<br>Than try to remember which value STATEGAMEOVER is.<br><br>edit: and it looks like he&apos;s doing more constants than just the game states.<br><br>The top wall of his pong game will always be at the value $20, so when he tells the game:<br><br>&quot;Stop the ball when it goes up on the screen to the $20 value&quot;<br><br>He can just say:<br><br>&quot;When ball hits TOPWALL, stop and go the other direction.&quot;<br>
				</div><div class="mdl-card--border"></div>