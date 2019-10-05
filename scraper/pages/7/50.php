<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Jan 22, 2012 at 6:16:20 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hey hey, again. Sorry for the double post,<br>but the edit in the last post didn&apos;t seem to get any answer, nevermind that.
I&apos;m working on a pong game, and I get the background to show up in the title screen,<br>but the text tiles are in the wrong place. If I press the start button,<br>the tiles end up in their right spot, but I can&apos;t figure out what&apos;s wrong.
Here is the NMI and title screen code:<br><br><br>Nmi:<br>
&#xA0;&#xA0;LDA #$00<br>
&#xA0;&#xA0;STA $2003<br>
&#xA0;&#xA0;LDA #$02<br>
&#xA0;&#xA0;STA $4014<br><br><br>&#xA0;&#xA0;LDA #%10010000<br>
&#xA0;&#xA0;STA $2000<br>
&#xA0;&#xA0;LDA #%00011110<br>
&#xA0;&#xA0;STA $2001<br>
&#xA0;&#xA0;LDA #$00<br>
&#xA0;&#xA0;STA $2005<br>
&#xA0;&#xA0;STA $2005<br>
	
&#xA0;&#xA0;JSR ReadController1<br>
&#xA0;&#xA0;JSR ReadController2<br>
	
GameStates:<br>
&#xA0;&#xA0;LDA gameState<br>
&#xA0;&#xA0;CMP #GSTITLE<br>
&#xA0;&#xA0;BEQ TitleScreen<br>
	
&#xA0;&#xA0;LDA gameState<br>
&#xA0;&#xA0;CMP #GSPLAYING<br>
&#xA0;&#xA0;BEQ PlayScreen<br>
	
&#xA0;&#xA0;LDA gameState<br>
&#xA0;&#xA0;CMP #GSGAMEOVER<br>
&#xA0;&#xA0;BEQ GameOverScreen<br>
GameStatesDone:<br>
	
&#xA0;&#xA0;RTI<br>
	
TitleScreen:<br>
&#xA0;&#xA0;LDA #$00<br>
&#xA0;&#xA0;STA $2000<br>
&#xA0;&#xA0;STA $2001<br>
	
&#xA0;&#xA0;LDX #LOW(TitleBG)<br>
&#xA0;&#xA0;LDY #HIGH(TitleBG)<br>
&#xA0;&#xA0;JSR SetBGPointer<br>
&#xA0;&#xA0;JSR LoadBG<br>
	
&#xA0;&#xA0;LDA #%10010000<br>
&#xA0;&#xA0;STA $2000<br>
&#xA0;&#xA0;LDA #%00011110<br>
&#xA0;&#xA0;STA $2001<br>
&#xA0;&#xA0;LDA #$00<br>
&#xA0;&#xA0;STA $2005<br>
&#xA0;&#xA0;STA $2005<br>
	
&#xA0;&#xA0;LDA controller1<br>
&#xA0;&#xA0;AND #%00010000<br>
&#xA0;&#xA0;BEQ DontStartGameYet<br><br><br>&#xA0;&#xA0;LDA #GSPLAYING<br>
&#xA0;&#xA0;STA gameState<br>
DontStartGameYet:<br>
&#xA0;&#xA0;JMP GameStatesDone
				</div><div class="mdl-card--border"></div>