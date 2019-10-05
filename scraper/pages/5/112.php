<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Oct 15, 2013 at 5:18:31 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<a href="http://s1074.photobucket.com/user/KilleRotom/media/softie000_zpsafd56252.png.html" target="_blank"><img src="scraper/images/softie000_zpsafd56252.png" original-src="http://i1074.photobucket.com/albums/w408/KilleRotom/softie000_zpsafd56252.png"></a><br>
I managed to move my little dude in all 4 directions, but the screen is garbled! My code is as follows...<br>
<div>
	&#xA0; .inesprg 1 ; 1x 16KB PRG code&#xA0;</div>
<div>
	&#xA0; .ineschr 1 ; 1x 8KB CHR data&#xA0;</div>
<div>
	&#xA0; .inesmap 0 ; mapper 0 = NROM, no bank swapping&#xA0;</div>
<div>
	&#xA0; .inesmir 1 ; background mirroring&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	;;;;;;;;;;;;;;;&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; .bank 0&#xA0;</div>
<div>
	&#xA0; .org $C000&#xA0;</div>
<div>
	RESET:&#xA0;</div>
<div>
	&#xA0; SEI&#xA0;</div>
<div>
	&#xA0; CLD&#xA0;</div>
<div>
	&#xA0; LDX #$40&#xA0;</div>
<div>
	&#xA0; STX $4017&#xA0;</div>
<div>
	&#xA0; LDX #$FF&#xA0;</div>
<div>
	&#xA0; TXS&#xA0;</div>
<div>
	&#xA0; INX&#xA0;</div>
<div>
	&#xA0; STX $2000&#xA0;</div>
<div>
	&#xA0; STX $2001&#xA0;</div>
<div>
	&#xA0; STX $4010&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	vblankwait1:&#xA0;</div>
<div>
	&#xA0; BIT $2002&#xA0;</div>
<div>
	&#xA0; BPL vblankwait1&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	clrmem:&#xA0;</div>
<div>
	&#xA0; LDA #$00&#xA0;</div>
<div>
	&#xA0; STA $0000, x&#xA0;</div>
<div>
	&#xA0; STA $0100, x&#xA0;</div>
<div>
	&#xA0; STA $0300, x&#xA0;</div>
<div>
	&#xA0; STA $0400, x&#xA0;</div>
<div>
	&#xA0; STA $0500, x&#xA0;</div>
<div>
	&#xA0; STA $0600, x&#xA0;</div>
<div>
	&#xA0; STA $0700, x&#xA0;</div>
<div>
	&#xA0; LDA #$FE&#xA0;</div>
<div>
	&#xA0; STA $0200, x&#xA0;</div>
<div>
	&#xA0; INX&#xA0;</div>
<div>
	&#xA0; BNE clrmem&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	vblankwait2:&#xA0;</div>
<div>
	&#xA0; BIT $2002&#xA0;</div>
<div>
	&#xA0; BPL vblankwait2&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	LoadPalettes:&#xA0;</div>
<div>
	&#xA0; LDA $2002 ; read PPU &#xA0; STAtus to reset the high/low latch&#xA0;</div>
<div>
	&#xA0; LDA #$3F&#xA0;</div>
<div>
	&#xA0; STA $2006 ; write the high byte of $3F00 address&#xA0;</div>
<div>
	&#xA0; LDA #$00&#xA0;</div>
<div>
	&#xA0; STA $2006 ; write the low byte of $3F00 address&#xA0;</div>
<div>
	&#xA0; LDX #$00&#xA0;</div>
<div>
	LoadPalettesLoop:&#xA0;</div>
<div>
	&#xA0; LDA palette, x ;load palette byte&#xA0;</div>
<div>
	&#xA0; STA $2007 ;write to PPU&#xA0;</div>
<div>
	&#xA0; INX ;set index to next byte&#xA0;</div>
<div>
	&#xA0; CPX #$20&#xA0;</div>
<div>
	&#xA0; BNE LoadPalettesLoop ;if x = $20, 32 bytes copied, all done&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	load_sprite_data:&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDX #$00&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	.loop:&#xA0;</div>
<div>
	&#xA0; LDA data, x&#xA0;</div>
<div>
	&#xA0; STA $0200, x&#xA0;</div>
<div>
	&#xA0; INX&#xA0;</div>
<div>
	&#xA0; CPX #$FF&#xA0;</div>
<div>
	&#xA0; BNE .loop&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	RTS&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA #%10000000 ; enable NMI, sprites from Pattern Table 1&#xA0;</div>
<div>
	&#xA0; STA $2000&#xA0;</div>
<div>
	&#xA0; LDA #%00010000 ; enable sprites&#xA0;</div>
<div>
	&#xA0; STA $2001&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	Forever:&#xA0;</div>
<div>
	&#xA0; JMP Forever ;jump back to Forever, infinite loop&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	NMI:&#xA0;</div>
<div>
	&#xA0; LDA #$00&#xA0;</div>
<div>
	&#xA0; STA $2003 ; set the low byte (00) of the RAM address&#xA0;</div>
<div>
	&#xA0; LDA #$02&#xA0;</div>
<div>
	&#xA0; STA $4014 ; set the high byte (02) of the RAM address, &#xA0; STArt the transfer&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	LatchController:&#xA0;</div>
<div>
	&#xA0; LDA #$01&#xA0;</div>
<div>
	&#xA0; STA $4016&#xA0;</div>
<div>
	&#xA0; LDA #$00&#xA0;</div>
<div>
	&#xA0; STA $4016 ; tell both the controllers to latch buttons&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	ReadA:&#xA0;</div>
<div>
	&#xA0; LDA $4016 &#xA0; &#xA0; &#xA0; ; player 1 - A</div>
<div>
	&#xA0; AND #%00000001 &#xA0;; only look at bit 0</div>
<div>
	&#xA0; BEQ ReadADone &#xA0; ; branch to ReadADone if button is NOT pressed (0)</div>
<div>
	ReadADone:</div>
<div>
	ReadB:&#xA0;</div>
<div>
	&#xA0; LDA $4016 &#xA0; &#xA0; &#xA0; ; player 1 - A</div>
<div>
	&#xA0; AND #%00000001 &#xA0;; only look at bit 0</div>
<div>
	&#xA0; BEQ ReadBDone &#xA0; ; branch to ReadADone if button is NOT pressed (0)</div>
<div>
	ReadBDone:</div>
<div>
	ReadSe:&#xA0;</div>
<div>
	&#xA0; LDA $4016 &#xA0; &#xA0; &#xA0; ; player 1 - A</div>
<div>
	&#xA0; AND #%00000001 &#xA0;; only look at bit 0</div>
<div>
	&#xA0; BEQ ReadSeDone &#xA0; ; branch to ReadADone if button is NOT pressed (0)</div>
<div>
	ReadSeDone:</div>
<div>
	ReadSt:&#xA0;</div>
<div>
	&#xA0; LDA $4016 &#xA0; &#xA0; &#xA0; ; player 1 - A</div>
<div>
	&#xA0; AND #%00000001 &#xA0;; only look at bit 0</div>
<div>
	&#xA0; BEQ ReadStDone &#xA0; ; branch to ReadADone if button is NOT pressed (0)</div>
<div>
	ReadStDone:</div>
<div>
	ReadD:&#xA0;</div>
<div>
	&#xA0; LDA $4016 ; dans l&apos;ordre - A,B,Se,St,H,B,G,D&#xA0;</div>
<div>
	&#xA0; AND #%00000001&#xA0;</div>
<div>
	&#xA0; BEQ ReadDDone&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA $0200&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $0200&#xA0;</div>
<div>
	&#xA0; LDA $0204&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $0204&#xA0;</div>
<div>
	&#xA0; LDA $0208&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $0208&#xA0;</div>
<div>
	&#xA0; LDA $020C&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $020C&#xA0;</div>
<div>
	ReadDDone:&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	ReadU:&#xA0;</div>
<div>
	&#xA0; LDA $4016 ; dans l&apos;ordre - A,B,Se,St,H,B,G,D&#xA0;</div>
<div>
	&#xA0; AND #%00000001&#xA0;</div>
<div>
	&#xA0; BEQ ReadUDone&#xA0;</div>
<div>
	&#xA0; LDA $0200&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $0200&#xA0;</div>
<div>
	&#xA0; LDA $0204&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $0204&#xA0;</div>
<div>
	&#xA0; LDA $0208&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $0208&#xA0;</div>
<div>
	&#xA0; LDA $020C&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $020C&#xA0;</div>
<div>
	ReadUDone:&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA $4016 ; dans l&apos;ordre - A,B,Se,St,H,B,G,D&#xA0;</div>
<div>
	&#xA0; AND #%00000001&#xA0;</div>
<div>
	&#xA0; BEQ ReadLDone&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDA $0203&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $0203&#xA0;</div>
<div>
	&#xA0; LDA $0207&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $0207&#xA0;</div>
<div>
	&#xA0; LDA $020B&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $020B&#xA0;</div>
<div>
	&#xA0; LDA $020F&#xA0;</div>
<div>
	&#xA0; SEC&#xA0;</div>
<div>
	&#xA0; SBC #$01&#xA0;</div>
<div>
	&#xA0; STA $020F&#xA0;</div>
<div>
	ReadLDone:&#xA0;</div>
<div>
	&#xA0; LDA $4016 ; dans l&apos;ordre - A,B,Se,St,H,B,G,D&#xA0;</div>
<div>
	&#xA0; AND #%00000001&#xA0;</div>
<div>
	&#xA0; BEQ ReadRDone&#xA0;</div>
<div>
	&#xA0; LDA $0203&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $0203&#xA0;</div>
<div>
	&#xA0; LDA $0207&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $0207&#xA0;</div>
<div>
	&#xA0; LDA $020B&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $020B&#xA0;</div>
<div>
	&#xA0; LDA $020F&#xA0;</div>
<div>
	&#xA0; CLC&#xA0;</div>
<div>
	&#xA0; ADC #$01&#xA0;</div>
<div>
	&#xA0; STA $020F&#xA0;</div>
<div>
	ReadRDone:&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	RTI&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	;;;;;;;;;;;;;;&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; .bank 1&#xA0;</div>
<div>
	&#xA0; .org $E000&#xA0;</div>
<div>
	palette:&#xA0;</div>
<div>
	&#xA0; .db $0F,$29,$37,$3D,$0F,$35,$36,$37,$0F,$39,$3A,$3B,$0F,$3D,$3E,$0F&#xA0;</div>
<div>
	&#xA0; .db $0F,$29,$37,$3D,$0F,$02,$38,$3C,$0F,$1C,$15,$14,$0F,$02,$38,$3C&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	data:&#xA0;</div>
<div>
	&#xA0; .db $80,$00,$00,$80,$80,$01,$00,$88,$88,$02,$00,$80,$88,$03,$00,$88&#xA0;</div>
<div>
	&#xA0; .org $FFFA ;first of the three vectors &#xA0; STArts here&#xA0;</div>
<div>
	&#xA0; .dw NMI ;when an NMI happens (once per frame if enabled) the&#xA0;</div>
<div>
	;processor will jump to the label NMI:&#xA0;</div>
<div>
	&#xA0; .dw RESET ;when the processor first turns on or is reset, it will jump&#xA0;</div>
<div>
	;to the label RESET:&#xA0;</div>
<div>
	&#xA0; .dw 0 ;external interrupt IRQ is not used in this tutorial&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	;;;;;;;;;;;;;;&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; .bank 2&#xA0;</div>
<div>
	&#xA0; .org $0000&#xA0;</div>
<div>
	&#xA0; .incbin &quot;mario.chr&quot; ;includes 8KB graphics file from SMB1</div>
				</div><div class="mdl-card--border"></div>