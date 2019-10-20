<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				Apr 22, 2014 at 4:22:24 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	No worries, all. I&apos;m thick skinned. Sometimes a good slap to the back of the head with and calling me an idiot is just what i need.<br>
	<br>
	I understand what they set of code does, but I am getting lost breaking it down line by line. For example, WTF is this guy doing except sitting there spinning in circles:<br>
	<br>
	.loop<br>
	&#xA0; LDA sleeping<br>
	&#xA0; BNE .loop<br>
	<br>
	I just can&apos;t grasp the concept why it must be there. And there are other things as well, such as pointers and the random [] around some of them, what&apos;s up with the period in from of .loop, and many other things. But then I realize, it works, I can repllcate it in other parts of my code and it works, so why worry. I usually learn what they do when I break the code and I have to relearn it.<br>
	<br>
	Now, since this is a coding question thread, I have one for you all. I&apos;m playing with a new way to write text to the screen. I have 100% written this code by hand trying to understand pointers. It kind of works, however, when it comes time to write the word PAUSE on the screen or erase it, I get 0000000000000000000000000000000000000000000 all the way across the screen in the row where PAUSE should show up. I&apos;m trying to do it this way so I can reuse the loop for future text I want to display.<br>
	<br>
	***NOTE*** Ignore the line comments of the code. I robbed this code from other sections of my code and haven&apos;t cleaned it up yet.<br>
	<br>
	<strong>;Variables Section</strong><br>
	TEXTLENGTH .rs 1<br>
	TEXTLOWBYTE .rs 1<br>
	TEXTHIGBYTE .rs 1<br>
	Text_Pointer .rs 1<br>
	<br>
	<strong>;Code I added to my Write Pause Subroutine</strong><br>
	&#xA0; LDA #$05<br>
	&#xA0; STA TEXTLENGTH<br>
	&#xA0;<br>
	&#xA0; LDA #$0E<br>
	&#xA0; STA TEXTLOWBYTE<br>
	&#xA0;<br>
	&#xA0; LDA #$21<br>
	&#xA0; STA TEXTHIGBYTE<br>
	&#xA0;<br>
	&#xA0; LDA #$00<br>
	&#xA0; TAX<br>
	&#xA0;<br>
	&#xA0; LDA Texts,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Load the Main Program Pointer<br>
	&#xA0; STA Text_Pointer<br>
	&#xA0;<br>
	&#xA0; JSR LoadText<br>
	&#xA0;<br>
	&#xA0;<br>
	<br>
	<strong>;Load Text Loop</strong><br>
	<br>
	LoadText:<br>
	&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
	&#xA0; LDA #TEXTHIGBYTE&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; variable<br>
	&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address<br>
	&#xA0; LDA #TEXTLOWBYTE&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; variable<br>
	&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address<br>
	&#xA0; LDX #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start out at 0<br>
	<br>
	LoadTextLoop:<br>
	&#xA0; LDA Text_Pointer, x&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (background + the value in x)&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;variable<br>
	&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write to PPU<br>
	&#xA0; INX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; X = X + 1<br>
	&#xA0; CPX #TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare X to hex $80, decimal 128 - copying 128 bytes&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; variable - Character Length<br>
	&#xA0; BNE LoadTextLoop&#xA0; ; Branch to LoadBackgroundLoop if compare was Not Equal to zero<br>
	&#xA0; RTS<br>
	&#xA0;<br>
	<br>
	<strong>;Databases</strong><br>
	&#xA0;<br>
	Texts:<br>
	&#xA0; .word PauseText,UnDrawPauseText<br>
	&#xA0;<br>
	PauseText:<br>
	&#xA0;.db&#xA0; $19,$0A,$1E,$1C,$0E&#xA0;&#xA0;&#xA0;&#xA0; ;PAUSE<br>
	UnDrawPauseText:<br>
	&#xA0;.db&#xA0; $24,$24,$24,$24,$24&#xA0;&#xA0;&#xA0;&#xA0; ;Undraw Pause</div>
<br>
<br>
A pointer is going to be a 16-bit number. So where you have.... lda texts, x &#xA0;sta Text_Pointer... you are loading an 8-bit value. To be super generic about it, you could just do:<br>
<br>
lda &lt;#PauseText<br>
sta Text_Pointer+0<br>
lda &gt;#PauseText<br>
sta Text_Pointer+1<br>
<br>
Then you would have to use the Y register and not the X. Since the address is in zero page, using (), y will get you want you want:<br>
<br>
lda (Text_Pointer), y<br>
sta $2007<br>
iny<br>
;etc etc<br>
<br>
Be sure to change Text_Pointer to .res 2, because you want to reserve 2 bytes for it since it is going to be used as a 16-bit address.<br>
<br>
Dunno if there&apos;s errors in what I said, but that&apos;s what it looks like needs to be done to me. Hope it helps! Oh, and the syntax I use is for ca65, you may need to adjust for whatever assembler you use.
				</div><div class="mdl-card--border"></div>