<div class="mdl-card__title"><strong>snitty</strong> posted on 
		
			
				
				Mar 26 at 8:33:26 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m having a delightfully weird issue where, when starting a new game I can move paddle 1 up or down, but once I start moving it one direction I can&apos;t move it the other. I can move it all the way up to the top stop, or all the way down to the bottom. 
<br>
<br>I&apos;m sure I&apos;m missing something dumb, but what is it? 
<br>
<br>MovePaddleUp:
<br>  ;;if up button pressed
<br>
<br>  LDA buttons1
<br>  AND #$08
<br>  BEQ MovePaddleUpDone
<br>  ;;  if paddle top &gt; top wall
<br>  LDA #$20
<br>  SEC
<br>  SBC paddle1ytop
<br>  BPL MovePaddleUpDone
<br>  DEC paddle1ytop
<br>  DEC paddle2ybot
<br>
<br>  ;;    move paddle top and bottom up
<br>MovePaddleUpDone:
<br>
<br>MovePaddleDown:
<br>  LDA buttons1
<br>  AND #$04
<br>  BEQ MovePaddleDownDone
<br>  ;;  if paddle top &gt; top wall
<br>  LDA #$E0
<br>  SEC
<br>  SBC paddle1ytop
<br>  BMI MovePaddleDownDone
<br>  INC paddle1ytop
<br>  INC paddle2ybot
<br>MovePaddleDownDone:
				</div><div class="mdl-card--border"></div>