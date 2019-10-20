<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Jun 3, 2015 at 4:25:34 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>glutock</b></i><br>
	<br>
	Hi everyone !<br>
	<br>
	I&apos;m new to this forum and a beginner at NES programming (not a beginner at programming in general though).<br>
	I&apos;ve been looking on the forums but I haven&apos;t been able to find any answer to my question ... (sorry for my english, I&apos;m french)<br>
	<br>
	I&apos;m trying to write a fade out routine using the &quot;substract $10&quot; technique.<br>
	<br>
	Here&apos;s the idea :<br>
	<br>
	1) loop throught the palettes, substract $10 to each color and store it in fadePaletteData var (set the color to $0f if result is negative)<br>
	2) load fadePaletteData in PPU<br>
	3) activate screen (? not sure if that&apos;s right/clear)<br>
	4) wait for X secondes (1 ? 2 ?)<br>
	5) loop until every colors are set to $0F<br>
	<br>
	And here&apos;s the code I&apos;ve written so far (I&apos;m using NESIDIDE) :<br>
	<br>
	.proc fadeOut<br>
	; init fade out<br>
	<br>
	LDA $2002 ; read PPU status to reset the high/low latch to high<br>
	LDA #$3F<br>
	STA $2006 ; write the high byte of $3F00 address<br>
	LDA #$00<br>
	STA $2006 ; write the low byte of $3F00 address<br>
	<br>
	; save current palettes substracting $10<br>
	<br>
	LDX #$00 ; start out at 0<br>
	LDY #$20 ; 32 colors to process<br>
	FadeOutSavePalette:<br>
	LDA $2007<br>
	SEC<br>
	SBC #$10<br>
	BPL FadeOutSavePaletteContinue<br>
	LDA #$0F ; if negative, set to $0F instead<br>
	DEY<br>
	FadeOutSavePaletteContinue:<br>
	STA fadePaletteData, x<br>
	INX<br>
	CPX #$20<br>
	BNE FadeOutSavePalette<br>
	<br>
	; load new palettes<br>
	<br>
	LDA $2002 ; read PPU status to reset the high/low latch to high<br>
	LDA #$3F<br>
	STA $2006 ; write the high byte of $3F00 address<br>
	LDA #$00<br>
	STA $2006 ; write the low byte of $3F00 address<br>
	LDX #$00 ; start out at 0<br>
	FadeOutLoadPalette:<br>
	LDA fadePaletteData, x<br>
	STA $2007<br>
	INX<br>
	CPX #$20<br>
	BNE FadeOutLoadPalette<br>
	<br>
	; update screen<br>
	; is there another way to apply new palette ?<br>
	<br>
	LDA #%10010000 ;enable NMI, sprites from Pattern 0, background from Pattern 1<br>
	STA $2000<br>
	<br>
	LDA #%00001110 ; enable sprites, enable background<br>
	STA $2001<br>
	<br>
	LDA #$00 ; no scrolling (?)<br>
	STA $2005<br>
	STA $2005<br>
	<br>
	;<br>
	; wait for 2 sec<br>
	; CODE MISSING HERE<br>
	;<br>
	<br>
	CPY #$00 ; every colors processed ?<br>
	BNE fadeOut ; if not fade out again<br>
	<br>
	RTS<br>
	.endproc<br>
	<br>
	So I&apos;m stuck on the &quot;wait for X sec&quot; section.<br>
	I really don&apos;t see how to do this ...<br>
	<br>
	Do I need to count X frames (50/60 for 1 sec ?) ? Is there another way to do this ?<br>
	<br>
	Thanks for your help !</div>
<br>
Moi j&apos;ai une routine toute simple pour noircir la palette. Certes, la palette se noircit chaques deux frames mais je pense que c&apos;est assez facile de la modifier pour augmenter/diminuer le temps enter deux soustractions de $10. Chaque fois que tu veux t&apos;en servir, mets une variable (J&apos;utilise $10 perso, comme &#xE7;a la palette reste noire pendant une seconde apr&#xE8;s l&apos;avoir assombrie)<br>
<br>
<div>
	;;;;;;;;;;;;;;;;;;;;;;;;;;</div>
<div>
	;;Palette fading routine;;</div>
<div>
	;;;;;;;;;;;;;;;;;;;;;;;;;;</div>
<div>
	&#xA0;</div>
<div>
	Palette_Fade:</div>
<div>
	&#xA0; LDX #$00</div>
<div>
	&#xA0; LDY #$00</div>
<div>
	&#xA0; LDA #$00</div>
<div>
	&#xA0; STA PalPointer</div>
<div>
	&#xA0; LDA fadeswitch</div>
<div>
	&#xA0; ROR A</div>
<div>
	&#xA0; BCC Palette_Fade2</div>
<div>
	&#xA0; DEC fadeswitch</div>
<div>
	&#xA0; RTS<span class="Apple-tab-span"> </span>;Make sure the human eye can actually SEE the fading - do it every 2 frames</div>
<div>
	Palette_Fade2:</div>
<div>
	&#xA0; LDA #$3F<span class="Apple-tab-span"> </span>;Hi part of $3FXX</div>
<div>
	&#xA0; STA $2006</div>
<div>
	&#xA0; LDA PalPointer<span class="Apple-tab-span"> </span>;Lo part of it</div>
<div>
	&#xA0; STA $2006</div>
<div>
	&#xA0; CPY #$00<span class="Apple-tab-span"> </span>;If the first part of the routine was done, fade the palette</div>
<div>
	&#xA0; BNE FadeOK</div>
<div>
	Palette_FadeLoop:</div>
<div>
	&#xA0; LDA $2007<span class="Apple-tab-span"> </span>;Load the palette value we use</div>
<div>
	&#xA0; CMP #$10<span class="Apple-tab-span"> </span>;Compare value to 10</div>
<div>
	&#xA0; BCS FadeMore<span class="Apple-tab-span"> </span>;If higher, fade a bit more</div>
<div>
	&#xA0; LDA #$0F</div>
<div>
	&#xA0; PHA<span class="Apple-tab-span"> </span>;Otherwise PHA some black and do nothing</div>
<div>
	&#xA0; INY</div>
<div>
	&#xA0; JMP Palette_Fade2</div>
<div>
	FadeMore:</div>
<div>
	&#xA0; SEC</div>
<div>
	&#xA0; SBC #$10<span class="Apple-tab-span"> </span>;Make it one tone darker</div>
<div>
	&#xA0; PHA<span class="Apple-tab-span"> </span>;Save this value in the STACK</div>
<div>
	&#xA0; INY<span class="Apple-tab-span"> </span>;Y reg serves as a check for this routine</div>
<div>
	&#xA0; JMP Palette_Fade2<span class="Apple-tab-span"> </span>;Go back to the palette address write to 2006</div>
<div>
	FadeOK:</div>
<div>
	&#xA0; INC PalPointer</div>
<div>
	&#xA0; PLA<span class="Apple-tab-span"> </span>;Take the value we shoved in the STACK</div>
<div>
	&#xA0; STA $2007<span class="Apple-tab-span"> </span>;And ram it in the palettes!</div>
<div>
	&#xA0; LDY #$00<span class="Apple-tab-span"> </span>;Reset the Y reg &quot;check&quot;</div>
<div>
	&#xA0; INX<span class="Apple-tab-span"> </span>;And increment X... This routine will execute itself 20 times</div>
<div>
	&#xA0; CPX #$20</div>
<div>
	&#xA0; BNE Palette_FadeLoop<span class="Apple-tab-span"> </span>;If it hasn&apos;t executed 20 times, make sure it does</div>
<div>
	&#xA0; DEC fadeswitch</div>
<div>
	&#xA0; JSR PPUCleanup</div>
<div>
	&#xA0; RTS<span class="Apple-tab-span"> </span>;Palette faded <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
	<br>
	Mets ceci en Subroutine. Ensuite, utilise le code ci-dessous au d&#xE9;but de la vBlank<br>
	<br>
	<div>
		&#xA0; LDA fadeswitch</div>
	<div>
		&#xA0; BEQ .nofade</div>
	<div>
		&#xA0; JSR Palette_Fade</div>
	<div>
		&#xA0; JMP Buffer_Done</div>
	<div>
		.nofade<br>
		<br>
		&#xA0; ;Buffer and other stuff<br>
		<br>
		Buffer_Done:</div>
</div>
<br>
				</div><div class="mdl-card--border"></div>