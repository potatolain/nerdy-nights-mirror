<div class="mdl-card__title"><strong>ubuntuyou</strong> posted on 
		
			
				
				Nov 9, 2016 at 7:25:04 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
I will leave you with the code I use to draw text to the Name Table with a few examples of text I write in my game.<br>
<br>
;Loading Code into Buffer Variables during main code (not during NMI)<br>
&#xA0;&#xA0;&#xA0; LDA #LOW(Hit1Text)&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;Load &apos;HIT 1&apos; into TextPointer<br>
&#xA0;&#xA0; &#xA0;STA TextPointer<br>
&#xA0;&#xA0; &#xA0;LDA #HIGH(Hit1Text)<br>
&#xA0;&#xA0; &#xA0;STA TextPointer+1<br>
<br>
&#xA0;&#xA0; &#xA0;LDA #$05&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&apos;HIT 1&apos; is 5 characters long<br>
&#xA0;&#xA0; &#xA0;STA TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;The length of the text being written to the screen (number of characters being written)<br>
<br>
&#xA0;&#xA0; &#xA0;LDA #$6F&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Write to PPU Address $206F (On the Name Table)<br>
&#xA0;&#xA0; &#xA0;STA TEXTLOWBYTE &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0;&#xA0; &#xA0;LDA #$20<br>
&#xA0;&#xA0; &#xA0;STA TEXTHIGHBYTE<br>
<br>
&#xA0; INC LoadTextFlag&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Enable the Load Text Routine<br>
<br>
;Call this during NMI<br>
&#xA0;&#xA0; &#xA0;JSR LoadText&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Jump to Subroutine LoadText<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;<br>
LoadText:<br>
&#xA0; LDA LoadTextFlag<br>
&#xA0; BEQ LoadTextDone<br>
<br>
&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
&#xA0; LDA TEXTHIGHBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address (Name Table)<br>
&#xA0; LDA TEXTLOWBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address (Name Table)<br>
&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start out at 0<br>
<br>
LoadTextLoop:<br>
&#xA0; LDA [TextPointer], y&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (background + the value in y)<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write to PPU<br>
&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Y = Y + 1<br>
&#xA0; CPY TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare Y to value in TEXTLENGTH<br>
&#xA0; BNE LoadTextLoop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Branch to LoadTextLoop if compare was Not Equal to TEXTLENGTH<br>
LoadTextDone:<br>
&#xA0; RTS<br>
&#xA0;<br>
;;;;;<br>
BlankTiles:<br>
&#xA0; .db $24,$24,$24,$24,$24,$24,$24,$24&#xA0; &#xA0;<br>
MissText:<br>
&#xA0; .db $16,$12,$1C,$1C&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;MISS<br>
Hit1Text:<br>
&#xA0; .db $11,$12,$1D,$24,$01&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 1<br>
Hit2Text:<br>
&#xA0; .db $11,$12,$1D,$24,$02&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 2<br>
Hit3Text:<br>
&#xA0; .db $11,$12,$1D,$24,$03&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 3<br>
Owned:<br>
&#xA0; .db $18,$20,$17,$0e,$0d&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;OWNED<br>
&#xA0;</div>
<br>
I&apos;m trying to implement something like this for flashing &quot;PRESS START&quot; text. I get a brief flash of graphical garbage every time it writes new bytes to the nametable though. I&apos;ve written my buffers in &quot;forever&quot; and am calling the &quot;writeText&quot; subroutine in my NMI. The only other things going on are handling the frame counter and checking the start button. Any idea what the issue could be? Something to do with writing to $2006 or $2007 perhaps. I&apos;ve been bashing my head against the keyboard over this for several hours now but it&apos;s after 6AM and I need sleep. Any help is appreciated. Offending code is in &quot;forever&quot; and just below and in &quot;engineTitle&quot; in the NMI.<br>
<br>
I figured it out. My end of NMI sequence was in the wrong place.<br>
&#xA0;
				</div><div class="mdl-card--border"></div>