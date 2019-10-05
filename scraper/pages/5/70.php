<div class="mdl-card__title"><strong>Herbalist</strong> posted on 
		
			
				
				Feb 2, 2011 at 3:06:33 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>-Basti-</b></i><br><br>Hi, I want to make am tile smoothly move. this is my code, but it doesn&#xB4;t work, can anybody help me?:
<br>
<br>LatchController:
<br>
<br>  LDA #$01
<br>  STA $4016
<br>  LDA #$00
<br>  STA $4016       ; tell both the controllers to latch buttons
<br>
<br>
<br>ReadA: 
<br>  LDA $4016       ; player 1 - A
<br>  AND #%00000001  ; only look at bit 0
<br>  BEQ ReadADone   ; branch to ReadADone if button is NOT pressed (0)
<br>
<br>fire:
<br>  LDA sprite_RAM+68          ;$D8
<br>  SBC #$01
<br>  STA sprite_RAM+68
<br>  ;---
<br>  LDA sprite_RAM+68
<br>  CMP $50
<br>  BNE fire
<br>
<br>ReadADone:        
<br>
<br></div><br>Really, really, late response, and Im a noob, but maybe it didnt work because you didnt put a SEC before your SBC to make sure the carry flag was set<br><br><br><br>I was also having trouble with my sprites moving in certain direction faster until I realized it was because when I was copying + pasting code I accidentally forgot to change SEC to CLC when I had to add instead of subtract. After I fixed that up my program was fine.<br><br><br>
				</div><div class="mdl-card--border"></div>