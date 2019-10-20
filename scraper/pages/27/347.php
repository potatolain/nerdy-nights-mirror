<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jun 7, 2014 at 3:48:39 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi all,<br>
<ol>
	<li>
		Anyone has an answer (also generic) to my previous question (see my previous post in this thread)? I think it can be done, I&apos;d like it to be confirmed.</li>
	<li>
		I pretty much finished with NN first part. My code work, I can do things reasonably easily, and all is clear. There is only one thing I still wonder about: all SPRITES are positioned EXACTLY 1PX BELOW (on the Y AXIS) where expected: it is a BUG, or it is just the way Nes position sprites? If a sprite has vertX=$00 horzY=$00, it should be exactly on the top-left corner (in PAL viewing) or 1 pixel below that? I hope my English is understandable. Please, whoever has a couple of minutes to spend, let me know. I paste a code example:</li>
</ol>
<pre>; iNES header
  .inesprg 1   ; 1x 16KB PRGcode
  .ineschr 1   ; 1x  8KB CHRdata
  .inesmap 0   ; mapper 0=NROM
  .inesmir 1   ; background mirroring
; program ROM
  .bank 0      ; 8KB c000-dfff
  .org $c000
reset: sei
      cld
      ldx #$40
      stx $4017    ; disable APU frame IRQ
      ldx #$ff
      txs          ; Set up stack (why?)
      inx          ; x=0
      stx $2000    ; disable NMI
      stx $2001    ; disable rendering
      stx $4010    ; disable DMC IRQs
xBlk: bit $2002    ; wait vblank
      bpl xBlk     ; PPU not ready
      lda #$00
xMem: sta $0000, x
      sta $0100, x
      sta $0200, x
      sta $0400, x
      sta $0500, x
      sta $0600, x
      sta $0700, x
      lda #$fe
      sta $0300, x ; !OutOfScreen
      inx
      bne xMem
yBlk: bit $2002    ; wait vblank
      bpl yBlk     ; PPU not ready
      lda $2002    ; read PPU status to reset
      lda #$3F     ;    ...the high/low latch
      sta $2006    ; write the high byte of
      lda #$00     ;    ...$3F00 address
      sta $2006    ; write the low byte of
      ldx #$00     ;    ...$3F00 address
xPal: lda pal, x   ; load palette byte
      sta $2007    ; write to PPU
      inx          ; set index to next byte
      cpx #$20
      bne xPal     ; if x=$20 32b copied, done
      ldx #$00     ; start at 0
xSpr: lda spr, x   ; load data from address (spr + x)
      sta $0200, x ; store into RAM address ($0200 + x)
      inx          ; x=x+1
      cpx #$20     ; Compare X to hex $20, decimal 32
      bne xSpr     ; Loop if compare Not Equal zero
      lda $2002    ; read PPU status to reset
      lda #$20     ;    ...the high/low latch
      sta $2006    ; write the high byte of
      lda #$00     ;    ...$2000 address
      sta $2006    ; write the low byte of...
      ldx #$00     ;    ...$2000 address
xBkg: lda bkg, x   ; load data from address (bkg + x)
      sta $2007    ; write to PPU
      inx          ; x=x+1
      cpx #$80     ; Compare X to hex $80, decimal 128
      bne xBkg     ; Loop if compare Not Equal zero
      lda $2002    ; read PPU status to reset
      lda #$23     ;    ...the high/low latch
      sta $2006    ; write the high byte of
      lda #$C0     ;    ...$23C0 address
      sta $2006    ; write the low byte of
      ldx #$00     ;    ...$23C0 address
xAtr: lda atr, x   ; load data from address (atr + x)
      sta $2007    ; write to PPU
      inx          ; x=x+1
      cpx #$08     ; Compare X to hex $08, decimal 8
      bne xAtr     ; Loop if compare Not Equal zero
      lda #$00     ; no background scrolling
      sta $2005
      sta $2005
      lda #%10010000 ; enable NMI, spr Tb0, bkg Tb1
      sta $2000
      lda #%00011110 ; enable spr+bkg, no clipping left
      sta $2001
loop: jmp loop     ; loop<br><br>nmi: lda #$00
     sta $2003     ; set the low byte (00)
                   ; ...of the RAM address
     lda #$02
     sta $4014     ; set the high byte (02)
                   ; ...of the RAM address,
                   ; ...start the transfer
     LDA #$01
     STA $4016
     LDA #$00
     STA $4016     ; both controllers latch buttons
xA:  LDA $4016       ; player 1 - A
     AND #%00000001  ; only look at bit 0
     BEQ xB          ; xB if button is NOT pressed (0)
xB:  LDA $4016       ; player 1 - B
     AND #%00000001  ; only look at bit 0
     BEQ xS          ; xS if button is NOT pressed (0)
xS:  LDA $4016       ; player 1 - Select
     AND #%00000001  ; only look at bit 0
     BEQ xX          ; xX if button is NOT pressed (0)
xX:  LDA $4016       ; player 1 - Start
     AND #%00000001  ; only look at bit 0
     BEQ xU          ; xU if button is NOT pressed (0)
xU:  LDA $4016       ; player 1 - Up
     AND #%00000001  ; only look at bit 0
     BEQ xD          ; xD if button is NOT pressed (0)
     LDA $0200       ; load sprite Y position
     SEC             ; make sure carry flag is set
     SBC #$01        ; A = A - 1
     STA $0200       ; save sprite Y position
xD:  LDA $4016       ; player 1 - Down
     AND #%00000001  ; only look at bit 0
     BEQ xL          ; xD if button is NOT pressed (0)
     LDA $0200       ; load sprite Y position
     CLC             ; make sure the carry flag is clear
     ADC #$01        ; A = A + 1
     STA $0200       ; save sprite Y position
xL:  LDA $4016       ; player 1 - Left
     AND #%00000001  ; only look at bit 0
     BEQ xR          ; xR if button is NOT pressed (0)
     LDA $0203       ; load sprite X position
     SEC             ; make sure carry flag is set
     SBC #$01        ; A = A - 1
     STA $0203       ; save sprite X position
xR:  LDA $4016       ; player 1 - Right
     AND #%00000001  ; only look at bit 0
     BEQ xGph        ; xDrw if button is NOT pressed (0)
     LDA $0203       ; load sprite X position
     CLC             ; make sure the carry flag is clear
     ADC #$01        ; A = A + 1
     STA $0203       ; save sprite X position
xGph: lda #$00       ; no background scrolling
      sta $2005
      sta $2005
      lda #%10010000 ; enable NMI, spr Tb0, bkg Tb1
      sta $2000
      lda #%00011110 ; enable spr+bkg, no clipping left
      sta $2001
      rti            ; return from interrupt<br><br>  .bank 1            ; data
  .org $e000
pal: .db $0E,$26,$06,$38,$0E,$26,$16,$38,$0E,$16,$06,$28,$0E,$13,$03,$28 ;bkg
     .db $0E,$26,$06,$38,$0E,$26,$16,$38,$0E,$16,$06,$28,$0E,$13,$03,$28 ;spr
spr: ;vert tile attr horiz
  .db <strong>$00</strong>, $01, $00, <strong>$00</strong>   ;sprite 0
  .db <strong>$00</strong>, $02, $01, $08   ;sprite 1
  .db <strong>$00</strong>, $03, $02, $10   ;sprite 2
  .db <strong>$00</strong>, $04, $03, $18   ;sprite 3
bkg: .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00 ;1
     .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00
     .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00 ;2
     .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00
     .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00 ;3
     .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00
     .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00 ;4
     .db $00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00
atr: .db %00000000,%00000000,%00000000,%00000000,%00000000,%00000000,%00000000,%00000000<br><br>  .org $fffa         ; vectors
  .dw nmi, reset, 0  ; 2byte NMI,reset,IRQ<br><br>  .bank 2            ; chr
  .org $0000
  .incbin &quot;gph.chr&quot;  ; 8KB graphics
</pre>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>