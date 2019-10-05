<div class="mdl-card__title"><strong>JC-Dragon</strong> posted on 
		
			
				
				Apr 25, 2011 at 8:40:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					By going back and looking at the code to see in which memory address they were put into???...
<br>
<br>but right now I&apos;m having the hardest time getting all four sprites to move together. I saw resynthesize&apos;s code and it somewhat makes sense to me but not entirely. I can get it to work left and right but up and down does some freaky stuff. I figured that my replacing the x&apos;s with y&apos;s and where the sprite address started it would just kick over and work
<br>
<br>ReadUp:			;Player 1 D-Pad UP
<br>  LDA $4016		; controller port 1 IRQ
<br>  AND #%00000001	; AND IRQ byte 
<br>  BEQ ReadUpDone	; Branch EQuals to ReadUpDone if Up was NOT pressed
<br>	;button is pressed
<br>  	
<br>  ldY #$00           ; y position of sprite starts at $0203
<br>
<br>moveloopUp:
<br>  lda $0203, y       ; load sprite y position ($2000 + y)
<br>  clc                ; make sure the carry flag is clear
<br>  SBC #$02           ; A = A + 1
<br>  sta $0203, y       ; save sprite y position
<br>  iny                ; increment y 4 times to get to next sprite
<br>  iny                ; y position
<br>  iny
<br>  iny
<br>  cpY #$13           ; if x = $13 (HEX), all 4 sprites have been moved
<br>  bne moveloopUp      ; otherwise keep going.
<br>
<br>ReadUpDone:
<br>
<br>vs his
<br>
<br>  ldx #$03           ; x position of sprite starts at $0203
<br>
<br>moveloop:
<br>  lda $2000, x       ; load sprite X position ($2000 + x)
<br>  clc                ; make sure the carry flag is clear
<br>  adc #$02           ; A = A + 1
<br>  sta $2000, x       ; save sprite X position
<br>  inx                ; increment X 4 times to get to next sprite
<br>  inx                ; x position
<br>  inx
<br>  inx
<br>  cpx #$0F           ; if x = $0f, all 4 sprites have been moved
<br>  bne moveloop       ; otherwise keep going.
<br>
<br>
				</div><div class="mdl-card--border"></div>