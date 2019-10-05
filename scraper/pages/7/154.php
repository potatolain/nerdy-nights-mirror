<div class="mdl-card__title"><strong>Cowpar2</strong> posted on 
		
			
				
				Sep 5, 2013 at 2:44:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					My NMI code remains unchanged:
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
<br>
<br>So, it should be jumping to my code during vblank.
				</div><div class="mdl-card--border"></div>