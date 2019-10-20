<div class="mdl-card__title"><strong>sweggreg</strong> posted on 
		
			
				
				Jul 18, 2015 at 5:02:12 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m new to assembly, and I&apos;m having some trouble thinking in ASM. I&apos;m trying to complete the pong game left by the Nerdy Nights tutorials, but I can&apos;t figure  out how to code movement so that the game runs while waiting for input. The ball should just keep bouncing by itself but it does not move unless a paddle is moving. Can someone look at this and give me some pointers?
<br>MovePaddleUp:
<br>  LDA buttons1;;if up button pressed
<br>  AND #%00001000
<br>  BEQ MoveBallUpDone
<br>
<br>  LDA TOPWALL
<br>  CMP paddle1ytop;;  if paddle top &gt; top wall
<br>  BCS MovePaddleUpDone
<br>  DEC paddle1ytop;;    move paddle top and bottom up
<br>  DEC paddle1ybot
<br>MovePaddleUpDone:
<br>
<br>Thanks
<br>Greg
				</div><div class="mdl-card--border"></div>