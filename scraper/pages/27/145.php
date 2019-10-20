<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Feb 8, 2014 at 8:15:41 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					LDA $2002<br>
LDA #$21 ;Write Hipart of $21BC to PPU<br>
STA $2006<br>
LDA #$BC ;Now Lopart<br>
STA $2006<br>
LDA randomness<br>
STA $2007<br>
LDA $2002 ;NOT NEEDED ANYHOW, THIS DOES NOTHING.<br>
LDA #$21 ;Write Hipart of $21DC to PPU<br>
STA $2006<br>
LDA #$DC ;Now Lopart<br>
STA $2006<br>
LDA randomness<br>
CLC<br>
ADC #$10<br>
STA $2007<br>
<br>
can be:<br>
<br>
LDA ($2000 Var in RAM) ;Get the game $2000 register value, this will be stored in RAM.<br>
ORA %00000100 ;Set +32 mode.<br>
STA PPUCtrl ;Set it up. Use a name not a number.<br>
LDA PPUStatus ;Reset high/low PPU latch. Use a name not a number.<br>
LDA #$21<br>
STA PPUData ;Less numbers on out code the better. Put a name to the PPU register, not a number. Numbers are hard to remember, names are not. Names is from nesdev wiki.<br>
LDA #$BC<br>
LDA Randomness<br>
STA PPUData ;Write the first value.<br>
CLC<br>
ADC #$10<br>
STA PPUData ;Write the second.<br>
<br>
With this routin just watch what the games *wants* to be the default for the PPU increment. We usually want it to be 1, but this changes it to 32, which will be used from now on unles you change it.
				</div><div class="mdl-card--border"></div>