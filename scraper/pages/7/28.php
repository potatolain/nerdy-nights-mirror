<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Dec 17, 2009 at 3:31:09 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The previous post was for the previous sprite question.  Sorry, hard to keep up on the iPhone.
<br>
<br>Basically to move the paddle up, you need to look at the las thing you just typed.  That subroutine is looking to see if the button is pressed, and if so, running the instructions under it.  You&apos;d just replace that stuff with:
<br>
<br>lda $0300
<br>sec
<br>sbc $#01
<br>sta $0300
<br>
<br>that will move the sprite up one pixel per frame if the button is pressed.  Make sure you&apos;re putting it after the bne pressdowndone or whatever it&apos;s called though.
				</div><div class="mdl-card--border"></div>