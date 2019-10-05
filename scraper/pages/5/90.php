<div class="mdl-card__title"><strong>glenn101</strong> posted on 
		
			
				
				Feb 15, 2012 at 4:55:28 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Is this an acceptable way to make sprites move slower than 1 pixel per Vblank:
<br>
<br>; Just before JMP Forever I cleared the X register.
<br>ReadA:
<br>LDA $4016 ; player 1 - A
<br>AND #%00000001 ; only look at bit 0
<br>BEQ ReadADone ; branch to ReadADone if button is NOT pressed (0)
<br>; add instructions here to do something when button IS pressed (1)
<br>INX ; if a press is registered for 3 Vblanks then translate the sprite.
<br>CPX #$03
<br>BNE ReadADone
<br>LDX #$00 ; Once it has been moved reset the Vblank counter.
<br>LDA $0203 ; load sprite X position
<br>CLC ; make sure the carry flag is clear
<br>ADC #$01 ; A = A + 3 (changed to 3)
<br>STA $0203 ; save sprite X position (sprite moves 1 unit right).
<br>ReadADone: ; handling this button is done
<br>
<br>I&apos;ve tried it and it works, just wondering if it&apos;s the right way to go about it.
				</div><div class="mdl-card--border"></div>