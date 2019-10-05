<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Feb 15, 2015 at 12:43:32 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m working with the scrolling2 file and attempting to rework it for vertical scrolling. I have set the mirroring, changed the third nametable and attribute addresses (2800 and 2BC0 respectively), and have made the following changes to the code below
<br>
<br>NMI:
<br>
<br>  INC scroll       ; add one to our scroll variable each frame
<br>NTSwapCheck:
<br>  LDA scroll       ; check if the scroll just wrapped from 255 to 0
<br>;  CMP #$EF        ; *A compare seems to be needed here, see question below
<br>  BNE NTSwapCheckDone
<br>  
<br>NTSwap:
<br>  LDA nametable          ; load current nametable number (0 or 1)
<br>  EOR #%00000010         ; exclusive OR of bit 0 will flip that bit
<br>                   ;*bit 1 selects nametable 2 (instead of nametable 1)
<br>  STA nametable    ; so if nametable was 0, now 2
<br>                   ;    if nametable was 2, now 0
<br>NTSwapCheckDone:
<br>
<br>  LDA #$00
<br>  STA $2003       
<br>  LDA #$02
<br>  STA $4014       ; sprite DMA from $0200
<br>  
<br>  ; run other game graphics updating code here
<br>
<br>  LDA #$00
<br>  STA $2006        ; clean up PPU address registers
<br>  STA $2006
<br>  
<br>  LDA #$00
<br>  STA $2005        ; write the horizontal scroll count register
<br>
<br>  LDA scroll       ; vertical scrolling
<br>  STA $2005
<br>    
<br>  ;;This is the PPU clean up section, so rendering the next frame starts properly.
<br>  LDA #%10010000   ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1
<br>  ORA nametable    ; select correct nametable for bit 0
<br>  STA $2000
<br>  
<br>  LDA #%00011110   ; enable sprites, enable background, no clipping on left side
<br>  STA $2001
<br>
<br>Everything works and scrolls smoothly, except that the screen jumps (or reloads?) between nametables. I am guessing that the section below needs to be changed to some sort of actual compare (vertical = 240 vs horizontal = 256 screen dimensions), but have not been able to figure out what exactly. I would have thought that #$EF/240 or #$E7/239 would have worked, but neither does. Any thoughts? Or I am missing a step when it comes to switching this up?
<br>
<br>  INC scroll       ; add one to our scroll variable each frame
<br>NTSwapCheck:
<br>  LDA scroll       ; check if the scroll just wrapped from 255 to 0
<br>  CMP #$__         ; *check to see if the scroll wrapped from 240 to 0
<br>  BNE NTSwapCheckDone
<br>  
<br>Thanks!
				</div><div class="mdl-card--border"></div>