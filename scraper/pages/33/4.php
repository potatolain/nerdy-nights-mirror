<div class="mdl-card__title"><strong>albailey</strong> posted on 
		
			
				
				May 12, 2010 at 8:39:16 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thats an awesome demo dude.
<br>
<br>The premise of putting the status bar at the top, is to remember to reset both the nametable page (register $2000) as well as both scroll registers ($2005).
<br>
<br>Then you wait for sprite zero to be reset (this happens at the end of vblank)
<br>Then you wait for sprite zero to be set (this happens when the screen draws sprite zero, and at least two of its pixels intersect the status area)
<br>Then you set the nametable correctly in register $2000 (either $2000 or $2400) and the scroll correctly.
<br>
<br>Here&apos;s example code:
<br>
<br>nmiHandler:
<br>        ; NMIs can be called anywhere at any time, so lets protect A,X,Y by putting them on the stack
<br>        PHA ; 3 cycles
<br>        TXA ; 2 cycles
<br>        PHA ; 3 cycles
<br>        TYA ; 2 cycles
<br>        PHA ; 3 cycles  so 13 CPU cycle setup cost to protect A,X,Y (and another 16 to restore things back at the end of the RTI)
<br>
<br>
<br>        LDA $2002 ; reset address latch
<br>
<br>
<br>        ; update the graphics, etc..
<br>
<br>        ; reset the status region to nametable of register PPU Control Register $2000 to be the nametable where the status region is located (usually $2000)
<br>        LDA #%10001000 
<br>        STA $2000
<br>        ; Reset the scrolling
<br>        LDA #$00
<br>        STA $2005
<br>        STA $2005
<br>
<br>        ; sprite DMA
<br>        lda #$02
<br>        sta $4014
<br>
<br>        ; Credit to DVDmth and DWEdit and Disch for helping me with sprite 0 detection
<br>        ; I do not care what is in the accumulator.  The BIT command will set overflow based on bit 6 of memory address ($2002)
<br>        ; Basically here is what happens with Sprite #0.  The hit flag is set and stays set for the entire frame and not cleared until scanline #0 starts (end of vblank)
<br>        ; Hit flag gets set when a non color 00 background instersects a non 00 color sprite pixel.  This cannot occurs at X position 255
<br>
<br>        ; Wait for Scanline #0 to reset the Sprite #0 hit flag
<br>:       BIT $2002
<br>        BVS :-
<br>
<br>        ; Wait for the first intersected pixel of sprite #0 to be rendered
<br>:       BIT $2002
<br>        BVC :-
<br>
<br>        ; Now set the screen and scroll for the game part
<br>        LDA CURRENT_SIDE_SCROLLER_DATA
<br>        STA $2000
<br>
<br>        ; FINE X scrolling updates right away, but I do not care so long as the status bar color is the same all the way through nametable $2000 and $2400.  Otherwise I will see crawling.
<br>        LDA X_SCROLL
<br>        STA $2005 ; first write is X scrolling
<br>        LDA #$00
<br>        STA $2005 ; second write is Y scrolling
<br>   
<br>etc..
<br>Al
<br>
<br>
				</div><div class="mdl-card--border"></div>