<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 22, 2014 at 5:13:02 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Working, thanks everyone!<br>
<br>
Final code:<br>
<br>
TEXTLENGTH .rs 1<br>
TEXTLOWBYTE .rs 1<br>
TEXTHIGBYTE .rs 1<br>
TextPointer .rs 2<br>
<br>
&#xA0; LDA #$05<br>
&#xA0; STA TEXTLENGTH<br>
&#xA0;<br>
&#xA0; LDA #$0E<br>
&#xA0; STA TEXTLOWBYTE &#xA0;<br>
&#xA0; LDA #$21<br>
&#xA0; STA TEXTHIGBYTE<br>
&#xA0;<br>
&#xA0; LDA #low(PauseText)<br>
&#xA0; STA TextPointer<br>
&#xA0; LDA #high(PauseText)<br>
&#xA0; STA TextPointer+1<br>
&#xA0;<br>
&#xA0; JSR LoadText<br>
<br>
<br>
LoadText:<br>
&#xA0; &#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
&#xA0;&#xA0;&#xA0; LDA TEXTHIGBYTE&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; variable<br>
&#xA0;&#xA0;&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address<br>
&#xA0;&#xA0;&#xA0; LDA TEXTLOWBYTE&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; variable<br>
&#xA0;&#xA0;&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address<br>
&#xA0;&#xA0;&#xA0; LDX #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start out at 0<br>
<br>
LoadTextLoop:<br>
&#xA0; &#xA0; LDA [TextPointer], y&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (background + the value in x)&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;variable<br>
&#xA0; &#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write to PPU<br>
&#xA0;&#xA0;&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; X = X + 1<br>
&#xA0;&#xA0;&#xA0; CPY TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare X to hex $80, decimal 128 - copying 128 bytes&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; variable - Character Length<br>
&#xA0;&#xA0;&#xA0; BNE LoadTextLoop&#xA0; ; Branch to LoadBackgroundLoop if compare was Not Equal to zero<br>
&#xA0;&#xA0;&#xA0; RTS<br>
&#xA0;<br>
PauseText:<br>
&#xA0;&#xA0; .db&#xA0; $19,$0A,$1E,$1C,$0E&#xA0;&#xA0;&#xA0;&#xA0; ;PAUSE<br>
UnDrawPauseText:<br>
&#xA0;&#xA0; .db&#xA0; $24,$24,$24,$24,$24&#xA0;&#xA0;&#xA0;&#xA0; ;Undraw Pause<br>
<br>
<br>
<br>
<br>
<br>
Why doing I need:<br>
&#xA0; LDA #high(PauseText)<br>
&#xA0; STA TextPointer+1<br>
<br>
I never call for TextPointer+1 in the code. Is it because I somehow made something 16-bit?
				</div><div class="mdl-card--border"></div>