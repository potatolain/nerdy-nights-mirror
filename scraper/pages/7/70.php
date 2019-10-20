<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Feb 5, 2012 at 2:45:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m really sorry that I&apos;m raping this thread with questions, but I want to finish this pong clone<br>
so I can go on and start coding for real. <span class="sprites_emoticons absmiddle" id="emo_tongue"></span><br>
The problem I&apos;m having is with the paddle collisions. Here is my code for it.<br>
Player1Collisions:<br>
	LDA player1<br>
	CMP ballPos+1<br>
	BNE .return<br><br>
	
	LDA player1+3<br>
	CMP ballPos<br>
	BNE .return<br>
	LDA #$01<br>
	STA ballDirection+1<br>
	STA ballDirection+2<br>
	LDA #$00<br>
	STA ballDirection<br>
	LDA ballDirection+3<br>
.return:<br>
	RTS<br><br>
And this subroutine is called in the main loop at the end, after the input is handled<br>
and the sprites are updated. Everything I have done so far seems to work fine EXCEPT the paddle collisions.<br>
Here is all the code, if it make things easier. <a href="http://pastebin.com/eTVKQgGx" target="_blank" original-href="http://pastebin.com/eTVKQgGx">http://pastebin.com/eTVKQgGx...</a><br>
ballPos is x, ballPos+1 is y, player1 is y and player1+3 is x.
				</div><div class="mdl-card--border"></div>