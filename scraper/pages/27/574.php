<div class="mdl-card__title"><strong>Broke Studio</strong> posted on 
		
			
				
				Jun 3, 2015 at 12:57:12 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi everyone !
<br>
<br>I&apos;m new to this forum and a beginner at NES programming (not a beginner at programming in general though).
<br>I&apos;ve been looking on the forums but I haven&apos;t been able to find any answer to my question ... (sorry for my english, I&apos;m french)
<br>
<br>I&apos;m trying to write a fade out routine using the &quot;substract $10&quot; technique.
<br>
<br>Here&apos;s the idea :
<br>
<br>1) loop throught the palettes, substract $10 to each color and store it in fadePaletteData var (set the color to $0f if result is negative)
<br>2) load fadePaletteData in PPU
<br>3) activate screen (? not sure if that&apos;s right/clear)
<br>4) wait for X secondes (1 ? 2 ?)
<br>5) loop until every colors are set to $0F
<br>
<br>And here&apos;s the code I&apos;ve written so far (I&apos;m using NESIDIDE) :
<br>
<br>.proc fadeOut
<br>; init fade out
<br>
<br>    LDA $2002    ; read PPU status to reset the high/low latch to high
<br>    LDA #$3F
<br>    STA $2006    ; write the high byte of $3F00 address
<br>    LDA #$00
<br>    STA $2006    ; write the low byte of $3F00 address
<br>
<br>; save current palettes substracting $10
<br>    
<br>    LDX #$00     ; start out at 0
<br>    LDY #$20     ; 32 colors to process
<br>FadeOutSavePalette:
<br>    LDA $2007
<br>    SEC
<br>    SBC #$10
<br>    BPL FadeOutSavePaletteContinue
<br>    LDA #$0F ; if negative, set to $0F instead
<br>    DEY
<br>FadeOutSavePaletteContinue:
<br>    STA fadePaletteData, x
<br>    INX
<br>    CPX #$20
<br>    BNE FadeOutSavePalette
<br>
<br>; load new palettes
<br>
<br>    LDA $2002    ; read PPU status to reset the high/low latch to high
<br>    LDA #$3F
<br>    STA $2006    ; write the high byte of $3F00 address
<br>    LDA #$00
<br>    STA $2006    ; write the low byte of $3F00 address
<br>    LDX #$00     ; start out at 0
<br>FadeOutLoadPalette:
<br>    LDA fadePaletteData, x
<br>    STA $2007
<br>    INX
<br>    CPX #$20
<br>    BNE FadeOutLoadPalette
<br>
<br>; update screen
<br>; is there another way to apply new palette ?
<br>
<br>    LDA #%10010000 ;enable NMI, sprites from Pattern 0, background from Pattern 1
<br>    STA $2000
<br>
<br>    LDA #%00001110 ; enable sprites, enable background
<br>    STA $2001
<br>
<br>    LDA #$00 ; no scrolling (?)
<br>    STA $2005
<br>    STA $2005
<br>
<br>;
<br>; wait for 2 sec
<br>; CODE MISSING HERE
<br>;
<br>
<br>    CPY #$00 ; every colors processed ?
<br>    BNE fadeOut ; if not fade out again
<br>
<br>    RTS
<br>.endproc
<br>
<br>So I&apos;m stuck on the &quot;wait for X sec&quot; section.
<br>I really don&apos;t see how to do this ...
<br>
<br>Do I need to count X frames (50/60 for 1 sec ?) ? Is there another way to do this ?
<br>
<br>Thanks for your help !
				</div><div class="mdl-card--border"></div>