<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Dec 17, 2009 at 5:22:26 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You can put this anywhere after NMI. To save space, you would probably want to put it outside your game engine loop and call it when needed.<br><br>code <br>code <br>code<br>JSR ReadUp (call the routine when you wanna see if you should move the paddle up<br>JSR ReadDown(same thing to check down)<br>code <br>code<br>code<br><br><br>;;;;;;;;;;;;;;;;;;;Outside routine;;;;;;;;;;;;;;;;;;;;;;;;;;;;;<br><font size="1">ReadUp:<br>&#xA0;&#xA0; LDA $4016<br>&#xA0;&#xA0; AND #%00000001 <br>&#xA0;&#xA0; BEQ ReadUpDone<br>&#xA0;&#xA0; LDA $0200(paddle sprite Y position)<br>&#xA0;&#xA0; SEC<br>&#xA0;&#xA0; SBC #$01<br>&#xA0;&#xA0; STA $0200(paddle sprite Y position)<br>ReadUpDone:</font><br>RTS<br><br>ReadDown:<br>code <br>code<br>code<br>ReadDownDone:<br>RTS<br><br><br><br><br>The way I did it is like this. This is my Playing engine for a 1 player game. Each one of these JSR jumps to the routine outside the engine loop then returns. My MovePaddleUp sub routine is pretty much the same as yours except I do a few more things there before returning. This routine here runs once ever NMI, so 60 times a sec.<br><br>EnginePlaying1P:<br>&#xA0; <br>&#xA0; JSR MoveBall<br>&#xA0; JSR movephan11<br>&#xA0; JSR movephan12<br>&#xA0; JSR movephan21<br>&#xA0; JSR movephan22<br>&#xA0; JSR MovePaddleUp <br>&#xA0; JSR MovePaddleDown<br>&#xA0; JSR MoveCPU<br>&#xA0; JSR CheckPaddleCollision<br>&#xA0; JSR check1ppower<br>&#xA0; JSR Startgame1p<br><br>&#xA0; JMP GameEngineDone<br>
				</div><div class="mdl-card--border"></div>