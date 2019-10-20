<div class="mdl-card__title"><strong>Alder</strong> posted on 
		
			
				
				May 4, 2016 at 12:36:47 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So I have a question about redrawing backgrounds. &#xA0;For my pong game, I have two scores drawn on the screen. &#xA0;When I update the score, I set a flag that says the background needs to be redrawn. &#xA0;Then in NMI, after I transfer the sprite data I check the flag and conditionally jump to a subroutine to redraw the background. &#xA0;I had code in that subroutine that was redrawing Player 1&apos;s score and it was working fine, but when I try to make it also redraw Player 2&apos;s score, I get some weird flickering and the scores get messed up. &#xA0;Here&apos;s the code I had for redrawing Player 1&apos;s score:<br>
<br>
DrawP1Score:<br>
&#xA0; ;Draw player1Score<br>
&#xA0; LDA $2002<br>
&#xA0; LDA #high(GRAPHICS_LOCATION + (player1ScoreSprite - backgrounds))<br>
&#xA0; STA $2006<br>
&#xA0; LDA #low(GRAPHICS_LOCATION + (player1ScoreSprite - backgrounds))<br>
&#xA0; STA $2006<br>
<br>
&#xA0; LDA player1Score<br>
&#xA0; STA myWord<br>
&#xA0; LDA player1Score+1<br>
&#xA0; STA myWord+1<br>
&#xA0; JSR HexWordToUnsignedDecimal ;converting 2 byte hex value to 5 byte (5 digits) decimal value<br>
&#xA0; LDA myDec+1 ;ignore ten thousands digit<br>
&#xA0; STA $2007<br>
&#xA0; LDA myDec+2<br>
&#xA0; STA $2007<br>
&#xA0; LDA myDec+3<br>
&#xA0; STA $2007<br>
&#xA0; LDA myDec+4<br>
&#xA0; STA $2007<br>
<br>
&#xA0; RTS<br>
<br>
<br>
I don&apos;t know if I&apos;m doing something wrong, but it seemed to work so I thought it was correct. &#xA0;But I made a similar subroutine for P2 and invoked it after DrawP1Score, and it updated the scores a few times before problems appear. &#xA0;Basically the screen sort of scrolls down and snaps back every few seconds.<br>
<br>
I think I figured it out though - maybe that hex conversion subroutine is just too expensive to call inside my redraw. &#xA0;Perhaps it wasn&apos;t too expensive to do once, but doing it twice made it noticeable? &#xA0;I commented it out and didn&apos;t get the flicker anymore. &#xA0;I&apos;m guessing I have to do all my intensive calculations outside of the redraw. &#xA0;Can anyone confirm that&apos;s the problem, or am I doing something else wrong?
				</div><div class="mdl-card--border"></div>