<div class="mdl-card__title"><strong>DC</strong> posted on 
		
			
				
				Aug 3, 2012 at 5:21:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I got a JMP GameEngineDone at the end of EnginePlaying.<br>
<br>
The code:<br>
<br>
CheckPaddleCollision:<br>
LDA ballx<br>
CMP #PADDLE1X+8<br>
BCS CheckPaddleCollisionDone ;;if ball x &gt; left wall, still on screen, skip next section<br>
LDA bally<br>
CMP paddle1y+2<br>
BCS CheckPaddleCollisionDone ;;if ball y &gt; top wall, still on screen, skip next section<br>
LDA bally<br>
CMP paddle1y2+2<br>
BCC CheckPaddleCollisionDone ;;if ball y &lt; bottom wall, still on screen, skip next section<br>
LDA #$01<br>
STA ballright<br>
LDA #$00<br>
STA ballleft ;;bounce, ball now moving right<br>
JMP CheckPaddleCollisionDone<br>
CheckPaddleCollisionDone:<br>
RTS<br>
<br>
Seems right to me.<br>
<br>
Finished:<br>
<br>
<a href="http://pastebin.com/cZAUUTfH" target="_blank" original-href="http://pastebin.com/cZAUUTfH">http://pastebin.com/cZAUUTfH</a>
<br>
Any tips for optimization?
				</div><div class="mdl-card--border"></div>