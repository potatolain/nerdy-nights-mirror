
					<b>This Week:</b> After scrolling this tutorial should be pretty simple.  Sprite 0 has a special PPU flag associated with it.  Here it will be used to do split screen scrolling to enable a static status bar on the top of the screen.<br>  <br><br><br><span class="Apple-style-span" style="font-size: medium; "><b>Sprite 0 Hit Flag</b></span><br>
Sprite 0 has a special flag in the PPU status register at bit 6.  When a non transparent pixel of sprite 0 overlaps a non transparent pixel of the background, the flag is set.  In the SMB example, sprite 0 is placed at the bottom of the coin icon.  That is one part of the status bar that does not move.<div><br>
<img src="scraper/images/sprite0.png" original-src="http://www.nespowerpak.com/nesasm/sprite0.png">&#xA0;<div><br>
In our example we first set the scroll registers to 0 for the static status bar.  The nametable is also set to 0.  That makes sure that the background and sprite 0 will overlap in the correct place.<br>  <br><br><pre>NMI:<br><br>  ; all graphics updating code goes here<br><br>  LDA #$00
  STA $2006        ; clean up PPU address registers
  STA $2006
  
  LDA #$00         ; start with no scroll for status bar
  STA $2005
  STA $2005
  
  LDA #%10010000   ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1
  STA $2000        ; start with nametable = 0 for status bar<br><br>  LDA #%00011110   ; enable sprites, enable background, no clipping on left side
  STA $2001</pre>  
Next we make sure the sprite 0 hit flag is clear, to avoid it being tripped from the previous frame.  The flag is cleared at the end of vblank, so once it equals 0 you know the next frame has started.<br>  <br><br><pre>WaitNotSprite0:
  lda $2002
  and #%01000000
  bne WaitNotSprite0   ; wait until sprite 0 not hit</pre>
<br>  
Now we wait until the sprite 0 is hit.  How long this takes depends on how far down the screen your sprite 0 is placed.<br>  <br><br><pre>WaitSprite0:
  lda $2002
  and #%01000000
  beq WaitSprite0      ; wait until sprite 0 is hit</pre>
<br>
When that loop finishes, the PPU is drawing the first pixels of sprite 0 that overlap pixels on the background.  We add a small wait loop so the rest of the status bar is drawn, and then change the scroll registers.  The rest of the screen down is drawn using those settings.<br><br><br><pre>  ldx #$10
WaitScanline:
  dex
  bne WaitScanline
  
  LDA scroll
  STA $2005        ; write the horizontal scroll count register
  LDA #$00         ; no vertical scrolling
  STA $2005
    
  LDA #%10010000   ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1
  ORA nametable    ; select correct nametable for bit 0
  STA $2000</pre>
<br>
So the order is:<br>
<pre>  1 - set scroll to 0 for status bar
  2 - wait for sprite 0 hit = 0
  3 - wait for sprite 0 hit = 1
  4 - delay so scanline finishes drawing
  5 - set scroll for level background</pre>
<br>  
The only other change is to make sure your graphics updating code does not draw over the status bar.  The previous DrawNewColumn function handles the graphics updates so it has a few small differences.  The starting address is increased by $80 to skip the first 4 rows of background.  Then the source address is increased by $04 for the same reason.  <br><br><br><br><span class="Apple-style-span" style="font-size: medium; "><b>Putting It All Together</b></span><br>
Download and unzip the <a href="scraper/files/sprite0.zip" target="_blank">sprite0.zip</a> sample files.   sprite0.asm is the same as the previous scrolling5.asm file plus the changes covered here.  This is another good one to watch in an emulator.  
</div></div>
				