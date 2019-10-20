<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 12, 2016 at 8:32:25 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Alder</b></i><br>
<br>
So I&apos;ve read from a couple places that doing &quot;everything in NMI&quot; is a bad idea. What&apos;s the alternative? Currently, my code looks like this:<br>
<br>
RESET:<br>
;some initialization<br>
;infinite loop<br>
NMI:<br>
;transfer sprite data<br>
;redraw background tiles if necessary<br>
;PPU cleanup<br>
;Read controller state<br>
;Run 1 game engine cycle<br>
;Update sprite data at $0200 RAM (or wherever I put them)<br>
;RTI<br>
-actual subroutines/data-<br>
<br>
Is this structure &quot;doing everything in NMI&quot;? Should I put my game logic somewhere else (in the infinite loop?)</div>
This is my entire NMI. I&apos;m not sure why, but I don&apos;t even poll controllers during NMI, it works fine for me.<br>
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
&#xA0; JSR GameStateNMIIndirect&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;jump to NMI code for current state. Mostly Background tile updates.<br>
&#xA0;<br>
&#xA0; LDA #$00&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;tell the ppu there is no background scrolling<br>
&#xA0; STA $2005<br>
&#xA0; STA $2005<br>
&#xA0;<br>
&#xA0; LDA #%10010000&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
&#xA0; ORA NameTableFlag&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0; ;switch nametables<br>
&#xA0; STA $2000<br>
<br>
&#xA0; ;;;;;;;;;;;;;;;;;;;;<br>
&#xA0;<br>
&#xA0; LDA EnablePPUFlag&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;check to see if the PPU needs turned on<br>
&#xA0; BEQ .SKIP<br>
&#xA0;&#xA0;&#xA0; LDA #%00011110&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;enable sprites, enable background, no clipping on left side<br>
&#xA0;&#xA0;&#xA0; STA $2001<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0;&#xA0; &#xA0;DEC EnablePPUFlag<br>
&#xA0; .SKIP:<br>
<br>
&#xA0; jsr FamiToneUpdate&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;*MUSIC<br>
&#xA0;&#xA0;&#xA0;&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ;run our sound engine after all drawing code is done.<br>
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
&#xA0; RTI&#xA0;&#xA0;&#xA0;<br>
&#xA0;
				</div><div class="mdl-card--border"></div>