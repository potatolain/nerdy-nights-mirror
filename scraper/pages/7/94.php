<div class="mdl-card__title"><strong>glenn101</strong> posted on 
		
			
				
				Feb 19, 2012 at 4:38:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Why do we enable NMI, sprites, background etc every time we enter another NMI frame? isn&apos;t it set once and stays set i.e. the bits are always a 1?
<br>How does this clean up the PPU section?
<br>
<br>;;:Set starting game state
<br>  LDA #STATEPLAYING
<br>  STA gamestate
<br>
<br>
<br>              
<br>  LDA #%10010000   ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1
<br>  STA $2000
<br>
<br>  LDA #%00011110   ; enable sprites, enable background, no clipping on left side
<br>  STA $2001
<br>
<br>Forever:
<br>  JMP Forever     ;jump back to Forever, infinite loop, waiting for NMI
<br>  
<br> 
<br>
<br>NMI:
<br>  LDA #$00
<br>  STA $2003       ; set the low byte (00) of the RAM address
<br>  LDA #$02
<br>  STA $4014       ; set the high byte (02) of the RAM address, start the transfer
<br>
<br>  JSR DrawScore
<br>
<br>  ;;This is the PPU clean up section, so rendering the next frame starts properly.
<br>  LDA #%10010000   ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1
<br>  STA $2000
<br>  LDA #%00011110   ; enable sprites, enable background, no clipping on left side
<br>  STA $2001
<br>  LDA #$00        ;;tell the ppu there is no background scrolling
<br>  STA $2005
<br>  STA $2005
				</div><div class="mdl-card--border"></div>