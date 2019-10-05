<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Feb 13, 2012 at 12:30:37 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;ve completed a functional pong game, and going through my code I can&apos;t help but feel like there&apos;s a more efficient way to code certain sections.  For example, I am very much wanting for reusable functions that I can pass variables to, like in the case of reading controllers.  When I press up, I want my paddle to go up.  If there are two paddles, I want to pass the function a variable that identifies what controller is receiving the input, and therefore which paddle gets moved as a result.  Is there a way to do this to avoid hard coding a lot of this stuff, or is what I&apos;m asking for simply one of the reasons modern languages exist?
<br>
<br>Here&apos;s an example of code specific for player 1 that cannot be reused for player 2 without copying the block of code and replacing all &quot;player 1&quot; variables with &quot;player 2&quot; variables:
<br>
<br>MovePaddle1Up:
<br>  LDA buttons1
<br>  AND #%00001000
<br>  BEQ MovePaddle1UpDone ; Use BEQ because zero flag will be set if result of AND operation is false
<br>  
<br>  ;;if up button pressed, move paddle up
<br>  LDA paddle1ytop
<br>  SEC
<br>  SBC paddle1speed
<br>  STA paddle1ytop
<br>  LDA paddle1ybot
<br>  SEC
<br>  SBC paddle1speed
<br>  STA paddle1ybot
<br>  
<br>  ;;  if paddle top &gt; top wall
<br>  LDA paddle1ytop
<br>  CMP #TOPWALL
<br>  BCS MovePaddle1UpDone
<br>  LDA #TOPWALL
<br>  STA paddle1ytop      ;set top tile y-coordinate to TOPWALL
<br>  CLC
<br>  ADC #$20             ;bottom of paddle is 32 pixels below TOPWALL, so have to keep it set there
<br>  STA paddle1ybot      ;otherwise, bottom y-coordinate will decrease when up is pushed
<br>MovePaddle1UpDone:
				</div><div class="mdl-card--border"></div>