<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Dec 11, 2015 at 2:04:11 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
	<br>
	Without seeing everything in the code and what&apos;s happening on real hardware, my first thoughts are that either your graphics pointer data is incorrect, you have something else in an interrupt that&apos;s messing with your $2006/$2007 stuff, or something like that.<br>
	<br>
	If it loads the initial graphics bank okay, your loading routine is probably fine. If you load the initial graphics bank before you enable NMI, you probably have something in the interrupt re-setting where you are sending the graphics data during the CHR RAM loading when you load the second bank. If you enable NMI before the first graphics bank loads and it gets input okay, you&apos;re problem is probably in your graphics addresses somewhere (graphicspointer, SourceLo, or something).<br>
	<br>
	My 0.02 from the code snip. Hope it helps.</div>
I offer you some of the code I cut out in between because I thought it wasn&apos;t apart of the issue. After what you said, it may be the issue. I may be trying to do too much at once (LoadSprites,LoadCHRRAM, LoadBackGround, LoadPalettes)? Here is the entire subroutine. Below that is all subroutines that apply to it.&#xA0; If you want MRN, hit me up in a pm. I just tossed a good chunk of code here. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
;----------------------------------------------------------- &#xA0;<br>
;-------------------START 2 PLAYER MENU---------------------<br>
;-----------------------------------------------------------<br>
Start2PMenu:&#xA0;&#xA0; &#xA0;<br>
&#xA0; LDA GameState<br>
&#xA0; STA GameState+1<br>
&#xA0;<br>
&#xA0; LDA #STATEP2MENU<br>
&#xA0; STA GameState<br>
<br>
&#xA0; ;Load Sprites on Screen&#xA0;&#xA0;&#xA0;<br>
&#xA0; LDA #$27&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;<br>
&#xA0; STA P1spriteRAM<br>
&#xA0; LDA #$00<br>
&#xA0; STA P1spriteRAM+2<br>
&#xA0; LDA #$20<br>
&#xA0; STA P1spriteRAM+3<br>
&#xA0;<br>
&#xA0; LDA #$2F<br>
&#xA0; STA P2spriteRAM<br>
&#xA0; LDA #$01<br>
&#xA0; STA P2spriteRAM+2<br>
&#xA0; LDA #$20 &#xA0;<br>
&#xA0; STA P2spriteRAM+3<br>
&#xA0;<br>
&#xA0; LDA #$B7<br>
&#xA0; STA spriteRAM<br>
&#xA0; LDA #$01<br>
&#xA0; STA spriteRAM+2<br>
&#xA0; LDA #$20<br>
&#xA0; STA spriteRAM+3<br>
&#xA0; &#xA0;<br>
;Reset Some Variables<br>
&#xA0; LDA #$00<br>
&#xA0; STA MenuSelectFlag<br>
&#xA0; STA BustFlag<br>
&#xA0; LDA #$05&#xA0;&#xA0;<br>
&#xA0; STA TEXTROWS<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; JSR DisablePPU<br>
&#xA0; ;;;;;Switch bank to load Graphics&#xA0;&#xA0; &#xA0;<br>
&#xA0;<br>
&#xA0; LDA #$01 ;;put new bank to use into A<br>
&#xA0; sta sourceBank<br>
&#xA0; JSR Bankswitch ;;jump to bank switching code<br>
&#xA0;<br>
&#xA0; LDA sourceBank<br>
&#xA0; ASL A<br>
&#xA0; TAY<br>
&#xA0; lda GraphicsPointer,y<br>
&#xA0; sta sourceLo<br>
&#xA0; lda GraphicsPointer+1,y&#xA0; ;get the address of the graphics data ($8000)<br>
&#xA0; sta sourceHi&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;put into our source pointer<br>
<br>
&#xA0; jsr LoadCHRRAM &#xA0;<br>
&#xA0;<br>
&#xA0; LDA #$00 ;;put new bank to use into A<br>
&#xA0; JSR Bankswitch ;;jump to bank switching code<br>
&#xA0; ;;;;;;;;;;;;;<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; LDA #LOW(TwoPlayerMenuBackground)<br>
&#xA0; STA BackgroundAddr<br>
&#xA0; LDA #HIGH(TwoPlayerMenuBackground)<br>
&#xA0; STA BackgroundAddr+1<br>
&#xA0; JSR LoadBackground<br>
&#xA0;<br>
&#xA0; LDA #LOW(TwoPlayerMenuPalette)<br>
&#xA0; STA PalettePointer<br>
&#xA0; LDA #HIGH(TwoPlayerMenuPalette)<br>
&#xA0; STA PalettePointer+1 &#xA0;<br>
&#xA0; LDA #$00<br>
&#xA0; STA PALLOWBYTE<br>
&#xA0; LDA #$20<br>
&#xA0; STA PALLENGTH<br>
&#xA0; JSR LoadPalettes &#xA0;<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0; INC EnablePPUFlag<br>
&#xA0;<br>
Start2PMenuDone:<br>
&#xA0; RTS<br>
<br>
<br>
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;<br>
;;;;;;;MORE SUBROUTINES THAT APPLY;;;;;<br>
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;<br>
<br>
;-----------------------------------------------------------<br>
;---------------------LOAD BACKGROUND-----------------------<br>
;-----------------------------------------------------------<br>
LoadBackground:<br>
&#xA0; LDA $2002<br>
&#xA0; LDA #$20<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address<br>
&#xA0; LDA #$00<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address<br>
&#xA0;<br>
&#xA0; LDX #$04&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Loop X 4 times<br>
&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Loop Y 256 times<br>
LoadBackgroundsLoop:<br>
&#xA0; LDA [BackgroundAddr],y<br>
&#xA0; STA $2007<br>
&#xA0; INY<br>
&#xA0; BNE LoadBackgroundsLoop<br>
; Outer loop<br>
&#xA0; INC BackgroundAddr+1&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; increment high byte of address backg to next 256 byte chunk<br>
&#xA0; DEX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; one chunk done so X = X - 1.<br>
&#xA0; BNE LoadBackgroundsLoop&#xA0;&#xA0; ; if X isn&apos;t zero, do again<br>
&#xA0; LoadBackGroundDone: &#xA0;<br>
&#xA0; RTS &#xA0;<br>
&#xA0;<br>
;-----------------------------------------------------------<br>
;-----------------------LOAD PALETTE------------------------<br>
;-----------------------------------------------------------<br>
LoadPalettes:<br>
&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
&#xA0; LDA #$3F<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $3F00 address<br>
&#xA0; LDA PALLOWBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $3FXX address<br>
&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start out at 0<br>
LoadPalettesLoop:<br>
&#xA0; LDA [PalettePointer], y&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (palette + the value in y)<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write to PPU<br>
&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Y = Y + 1<br>
&#xA0; CPY PALLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare Y to hex PALLENGTH<br>
&#xA0; BNE LoadPalettesLoop&#xA0; ; Branch to LoadPalettesLoop if compare was Not Equal to zero<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; if compare was equal to PALLENGTH, keep going down<br>
&#xA0; RTS&#xA0;&#xA0; &#xA0;<br>
<br>
<br>
;--------------------------------------------------------------<br>
;-----------------------NMI ROUTINE----------------------------<br>
;--------------------------------------------------------------<br>
NMI:<br>
&#xA0; PHA&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;protect the registers by moving values to the stack<br>
&#xA0; TXA<br>
&#xA0; PHA<br>
&#xA0; TYA<br>
&#xA0; PHA<br>
<br>
nmi_start: &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;write Sprite RAM<br>
&#xA0; LDA #$00<br>
&#xA0; STA $2003&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; set the low byte (00) of the RAM address<br>
&#xA0; LDA #$02<br>
&#xA0; STA $4014<br>
&#xA0;<br>
&#xA0; LDA updating_background&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;check to be sure that the main program isn&apos;t busy<br>
&#xA0; BNE skip_graphics_updates<br>
<br>
&#xA0; JSR GameStateNMIIndirect<br>
&#xA0;<br>
&#xA0; LDA #$00&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;tell the ppu there is no background scrolling<br>
&#xA0; STA $2005<br>
&#xA0; STA $2005<br>
&#xA0;<br>
&#xA0; LDA #%10010000&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
&#xA0; STA $2000<br>
&#xA0;<br>
&#xA0; LDA EnablePPUFlag<br>
&#xA0; BEQ .SKIP<br>
&#xA0;&#xA0;&#xA0; LDA #%00011110&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;enable sprites, enable background, no clipping on left side<br>
&#xA0;&#xA0;&#xA0; STA $2001<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0;&#xA0; &#xA0;DEC EnablePPUFlag<br>
&#xA0; .SKIP:<br>
<br>
&#xA0; JSR sound_play_frame&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;run our sound engine after all drawing code is done.<br>
&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;this ensures our sound engine gets run once per frame.<br>
&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; LDA #$00<br>
&#xA0; STA sleeping&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;wake up the main program &#xA0;<br>
&#xA0;<br>
skip_graphics_updates:<br>
<br>
&#xA0; PLA&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;restore the registers<br>
&#xA0; TAY<br>
&#xA0; PLA<br>
&#xA0; TAX<br>
&#xA0; PLA<br>
<br>
&#xA0; RTI&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;return from interrupt&#xA0;<br>
<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>