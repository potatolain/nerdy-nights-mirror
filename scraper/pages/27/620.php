<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jul 18, 2015 at 6:23:58 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>sweggreg</b></i><br>
<br>
I&apos;m new to assembly, and I&apos;m having some trouble thinking in ASM. I&apos;m trying to complete the pong game left by the Nerdy Nights tutorials, but I can&apos;t figure out how to code movement so that the game runs while waiting for input. The ball should just keep bouncing by itself but it does not move unless a paddle is moving. Can someone look at this and give me some pointers?<br>
MovePaddleUp:<br>
LDA buttons1;;if up button pressed<br>
AND #%00001000<br>
<strong>BEQ MoveBallUpDone&lt;-- where this brenches?</strong><br>
<br>
LDA TOPWALL<br>
CMP paddle1ytop;; if paddle top &gt; top wall<br>
<strong>BCS MovePaddleUpDone &lt;-- where this brenches?</strong><br>
DEC paddle1ytop;; move paddle top and bottom up<br>
DEC paddle1ybot<br>
MovePaddleUpDone:<br>
<br>
Thanks<br>
Greg</div>
They do not brench the same address. So:<br>
<br>
If UP is NOT pressed goto Move<strong>Ball</strong>UpDone<br>
<br>
If paddle can&apos;t go UP goto Move<strong>Paddle</strong>UpDone<br>
<br>
I am not sure this is the issue, maybe is not, I need to see more code.<br>
<br>
But is just an idea, is possible there is a mistake here?<br>
<br>
Just trying to help. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
And welcome! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>