<div class="mdl-card__title"><strong>-Basti-</strong> posted on 
		
			
				
				Sep 24, 2010 at 5:02:14 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi, I want to make am tile smoothly move. this is my code, but it doesn&#xB4;t work, can anybody help me?:
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
<br>
				</div><div class="mdl-card--border"></div>