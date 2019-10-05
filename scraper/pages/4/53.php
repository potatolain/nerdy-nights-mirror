<div class="mdl-card__title"><strong>Samarth</strong> posted on 
		
			
				
				Feb 16, 2013 at 10:45:42 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					but this is in the code sprite.asm :-
<br>
<br>
<br>
<br>LoadPalettes:
<br>  LDA $2002    ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006    ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006    ; write the low byte of $3F00 address
<br>  LDX #$00
<br>LoadPalettesLoop:
<br>  LDA palette, x        ;load palette byte
<br>  STA $2007             ;write to PPU
<br>  INX                   ;set index to next byte
<br>  CPX #$20            
<br>  BNE LoadPalettesLoop  ;if x = $20, 32 bytes copied, all done
<br>
<br>
<br>
<br>that means palletes are loaded to $3F00, but i couldn&apos;t figure out, where is this data getting used in?
				</div><div class="mdl-card--border"></div>