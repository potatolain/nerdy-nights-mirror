<div class="mdl-card__title"><strong>albailey</strong> posted on 
		
			
				
				Feb 25, 2011 at 9:27:44 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Do this to change the palette for sprites:
<br>LDA $2002   ; this resets the toggle
<br>LDA #$3F 
<br>STA $2006 
<br>LDA #$10 
<br>STA $2006 
<br>
<br>        LDX #$00
<br>:       LDA myPaletteTable,x
<br>        STA $2007
<br>        inx
<br>        cpx #$10 ; $10 hex == 16 decimal
<br>        bne :-
<br>
<br>This gets you pointing at $3F10  which is the first of the sprite palette.
<br>It then copies 16 bytes to the sprite palette.
<br>
<br>This assumes you are set to increment PPU by 1.
<br>
<br>Refer to this page: <a href="http://wiki.nesdev.com/w/index.php/PPU_registers" target="_blank">http://wiki.nesdev.com/w/index.ph...</a> and the entry that says: VRAM address increment per CPU read/write of PPUDATA
<br>
<br>
<br><div><br></div><div>As for your question about sprite 0.</div><div>It appears that you are using mem page 2 for sprites.</div><div>That means $0200-02FF will represent all 64 possible sprites you can have on the screen.</div><div>$0200-$0203 &#xA0;are for sprite 0</div><div><div>$0204-$0207 &#xA0;are for sprite 1</div><div>etc..</div><div><br></div><div>If you want to create or move a different sprite, do so for the memory that corresponds to that sprite.</div><div>Al</div><div><br></div>
<br>Al
</div>
				</div><div class="mdl-card--border"></div>