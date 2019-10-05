<div class="mdl-card__title"><strong>jarrodparkes</strong> posted on 
		
			
				
				Oct 17, 2012 at 10:18:06 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m not sure I am following. In the controller.asm example the following code is used...
<br>
<br>LoadPalettes:
<br>  LDA $2002             ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006             ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $3F00 address
<br>  LDX #$00              ; start out at 0
<br>LoadPalettesLoop:
<br>  LDA palette, x        ; load data from address (palette + the value in x)
<br>
<br>The &quot;palette&quot; label is defined near the bottom of the assembly file. Also, right before the label, the directive is given to start loading data/instructions into memory location $E000. For the above execution to work as intended, I&apos;m guessing the assembler would have to ensure that all the palette data has been stored in memory locations starting at $E000 prior to execution?
				</div><div class="mdl-card--border"></div>