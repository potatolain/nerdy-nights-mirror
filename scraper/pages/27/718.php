<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Dec 11, 2015 at 12:17:32 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So, trying to get my game to work on a 128k Self-Flashable INL UNROM board. Here is the bank switching routine. The first Title Screen loads fine. When I switch to the next screen (when on real hardware), the graphics fail to load.<br>
<br>
Basically, when it does the bank switch on real hardware, it bombs all my graphics and all I get are colored squares, as if it can&apos;t find the data to load the screen. This routine works perfect on an Emulator.<br>
<br>
Anyone see anything wrong with the code? Been banging my head for 3 days now. Only thing I can really find online for UNROM is for a different compiler. I translated the code the best I could for NESASM3.<br>
<br>
<br>
;-----------------Header----------------------------<br>
&#xA0; .inesprg 8&#xA0;&#xA0; ; 8x 16KB PRG code = 128KB<br>
&#xA0; .ineschr 0&#xA0;&#xA0; ; 0x&#xA0; 8KB CHR data = CHR RAM<br>
&#xA0; .inesmap 2&#xA0;&#xA0; ; mapper 2 UNROM<br>
&#xA0; .inesmir 2&#xA0;&#xA0; ; Horz mirroring and Enable Battery<br>
<br>
.bank 0&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;bankSource=00<br>
&#xA0; .org $8000 &#xA0;<br>
TitleGraphics:<br>
&#xA0; .incbin &quot;titlegraphics.chr&quot;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;8kb<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; .bank 1<br>
&#xA0; .org $A000<br>
&#xA0; .include &quot;Music/sound_engine.asm&quot;<br>
&#xA0;<br>
&#xA0; .bank 2&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;bankSource=01<br>
&#xA0; .org $8000<br>
GameGraphics:<br>
&#xA0; .incbin &quot;gamegraphics.chr&quot;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;8kb<br>
&#xA0; &#xA0;<br>
&#xA0; .bank 3<br>
&#xA0; .org $A000<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; .bank 4&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;bankSource=02<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 5<br>
&#xA0; .org $A000<br>
<br>
&#xA0; .bank 6&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;bankSource=03<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 7<br>
&#xA0; .org $A000<br>
<br>
&#xA0; .bank 8&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;bankSource=04<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 9<br>
&#xA0; .org $A000<br>
<br>
&#xA0; .bank 10&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;bankSource=05<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 11<br>
&#xA0; .org $A000<br>
<br>
&#xA0; .bank 12&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;bankSource=06<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 13<br>
&#xA0; .org $A000<br>
<br>
&#xA0; .bank 14<br>
&#xA0; .org $C000 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;fixed banks<br>
&#xA0; .;;;SOME GAME CODE HERE;;;;<br>
<br>
&#xA0; .bank 15&#xA0;&#xA0;&#xA0;<br>
&#xA0; .org $E000<br>
;;;;;;;;;;;;MAIN GAME CODE HERE;;;;;;;;;;;;;;;;;;;;;;;;<br>
<br>
;--------------------------BANK SWITCH AND CHRRAM LOADING ROUTINES in .bank 15----------------------------------------<br>
JSR DisablePPU&#xA0;&#xA0;&#xA0; ;Routine that turns the PPU off immeidately<br>
&#xA0; ;;;;;Switch bank to load Graphics&#xA0;&#xA0; &#xA0;<br>
<br>
&#xA0; LDA #$01 &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;Load sourceBank with BANK #$01<br>
&#xA0; sta sourceBank&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;Store in sourceBank. sourceBank used to pick the correct GraphicsPointer<br>
&#xA0; JSR Bankswitch &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;;jump to bank switching code<br>
&#xA0;<br>
&#xA0; LDA sourceBank<br>
&#xA0; ASL A<br>
&#xA0; TAY<br>
&#xA0; lda GraphicsPointer,y&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;Point to Graphics file to load into RAM in the new bank<br>
&#xA0; sta sourceLo<br>
&#xA0; lda GraphicsPointer+1,y&#xA0; ;get the address of the graphics data<br>
&#xA0; sta sourceHi&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;put into our source pointer<br>
<br>
&#xA0; jsr LoadCHRRAM&#xA0; ;Load CHRRAM<br>
<br>
&#xA0; LDA #$00 ;;Return to Bank 0 as my music code is there.<br>
&#xA0; JSR Bankswitch ;;jump to bank switching code<br>
<br>
&#xA0; ;;;;;;;;;;;;;<br>
&#xA0; &#xA0;&#xA0; &#xA0;<br>
&#xA0;;CODE FOR LOOP TO LOAD BACKGROUND TILES FOR NEW BACKGROUND<br>
;CODE FOR LOOP TO LOAD NEW PALETTES<br>
<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; INC EnablePPUFlag&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;FLAG TO TURN PPU BACK ON IN NMI<br>
<br>
;---------------------------------------LOAD CHRAM in .bank 15------------------------------------------------------<br>
LoadCHRRAM:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;copies 8KB of graphics from PRG to CHR RAM<br>
&#xA0; lda $2002<br>
&#xA0; lda #$00<br>
&#xA0; sta $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;set PPU to the CHR RAM area $0000-1FFF<br>
&#xA0; sta $2006<br>
&#xA0; ldy #$00<br>
&#xA0; ldx #$20&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;32 x 256 bytes = 8 KB<br>
<br>
LoadCHRRamLoop:<br>
&#xA0; lda [sourceLo], y&#xA0;&#xA0;&#xA0; ;copy from source pointer<br>
&#xA0; sta $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;to PPU CHR RAM area<br>
&#xA0; iny<br>
&#xA0; bne LoadCHRRamLoop&#xA0;&#xA0; ;;loop 256 times<br>
&#xA0; inc sourceHi&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;then increment the high address byte<br>
&#xA0; dex&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;do that 32 times<br>
&#xA0; bne LoadCHRRamLoop&#xA0;&#xA0; ;;32 x 256 = 8KB<br>
LoadCHRRamDone:<br>
&#xA0; rts&#xA0;&#xA0; &#xA0;<br>
<br>
GraphicsPointer:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Points to the graphics files in the banks above<br>
&#xA0;&#xA0; &#xA0;.word TitleGraphics,GameGraphics<br>
<br>
;--------------------------------------BANK SWITCH in .bank 15------------------------------------------------------<br>
Bankswitch:<br>
&#xA0; TAY ;;copy A into X<br>
&#xA0; STA Bankvalues,Y ;;new bank to use<br>
&#xA0; RTS<br>
<br>
Bankvalues:<br>
&#xA0; .db $00,$01,$02,$03,$04,$05,$06<br>
				</div><div class="mdl-card--border"></div>