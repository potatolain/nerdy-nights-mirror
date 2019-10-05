<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Nov 6, 2015 at 9:57:48 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>sempressimo</b></i><br>
<br>
Thanks Mega Mario Man, now I have room switching working. I do get a quick black flash when switching, I know is because I am turning on and off the PPU, just wondering if this is the standard way or if there is a way around this?<br>
<br>
Also, if I want to update just some background tiles, like the score for example, can I just update the value in my backgrounds .db(s)&#xA0;directly and that is it? Or does the PPU has to be turned off for this also?<br>
<br>
&#xA0;</div>
<br>
Unfortunately, you are going to get the slight moment of black as the PPU is off at that time. When trying to render that many background tiles at one time, you have to disable the PPU.<br>
<br>
For shorter lengths, the PPU does not need to be disabled, however, you still have to load the tiles during the NMI. I do this all of the time, especially in my current game I&apos;m writing. These is only 1 8x8 sprite in the game, and its just an arrow to point to who&apos;s turn it is.<br>
<br>
There is a spot in the game where I write 256 tiles to the background (1/4 of the screen) and I do turn off the PPU for that.<br>
<br>
Here is some code from my current game, I never disable the PPU for any of those .db tables:<br>
<br>
&#xA0;LDA #$05<br>
&#xA0; STA TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;The length of the text being written to the screen (number of characters being written)<br>
&#xA0;<br>
&#xA0; LDA #$0E<br>
&#xA0; STA TEXTLOWBYTE &#xA0;<br>
&#xA0; LDA #$21<br>
&#xA0; STA TEXTHIGBYTE<br>
&#xA0;<br>
&#xA0; LDA #LOW(PauseText)<br>
&#xA0; STA TextPointer<br>
&#xA0; LDA #HIGH(PauseText)<br>
&#xA0; STA TextPointer+1<br>
&#xA0;<br>
&#xA0; JSR LoadText<br>
--------------------------------------------------------------------------------------------<br>
LoadText:<br>
&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
&#xA0; LDA TEXTHIGBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte<br>
&#xA0; LDA TEXTLOWBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte<br>
&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start y out at 0<br>
<br>
LoadTextLoop:<br>
&#xA0; LDA [TextPointer], y&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (background + the value in y)<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write to PPU<br>
&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ; y = y + 1<br>
&#xA0; CPY TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare Y to TEXTLENGTH<br>
&#xA0; BNE LoadTextLoop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Branch to LoadTextLoop if compare was Not Equal to zero<br>
&#xA0; RTS<br>
&#xA0;<br>
PauseText:<br>
&#xA0; .db $19,$0A,$1E,$1C,$0E&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;PAUSE<br>
UnDrawPauseText:<br>
&#xA0; .db $24,$24,$24,$24,$24,$24,$24,$24&#xA0;&#xA0;&#xA0;&#xA0; ;Undraw Pause<br>
MissText:<br>
&#xA0; .db $16,$12,$1C,$1C&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;MISS<br>
Hit1Text:<br>
&#xA0; .db $11,$12,$1D,$24,$01&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 1<br>
Hit2Text:<br>
&#xA0; .db $11,$12,$1D,$24,$02&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 2<br>
Hit3Text:<br>
&#xA0; .db $11,$12,$1D,$24,$03&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; ;HIT 3
				</div><div class="mdl-card--border"></div>