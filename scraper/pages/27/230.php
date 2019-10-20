<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 22, 2014 at 5:40:53 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Roth</b></i><br>
	<br>
	You were trying to reach a 16-bit address with the table you had setup with .word. NES uses something called little endian (just Google that), and the +1 is the high byte of the address, whereas the +0 is the low byte. The only 8-bit addresses you&apos;ll be messing with are zeropage : ). But yeah, maybe just look up little endian 6502 or something. It should make sense. Ask questions if not!</div>
Thanks. I know what little endian and big endian are. So, it is calling the address of PauseText in the register? If so, that was a huge light bulb!<br>
<br>
I always thought it was doing this (but I am guessing I was wrong):<br>
<br>
<strong>&#xA0; LDA #low(PauseText)&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; = $19 (First number of .db&#xA0; $19,$0A,$1E,$1C,$0E)<br>
&#xA0; STA TextPointer<br>
&#xA0; LDA #high(PauseText)&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; = $0E (First number of .db&#xA0; $19,$0A,$1E,$1C,$0E)&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; STA TextPointer+1<br>
<br>
PauseText:<br>
&#xA0;&#xA0; .db&#xA0; $19,$0A,$1E,$1C,$0E&#xA0;&#xA0;&#xA0;&#xA0; ;PAUSE</strong><br>
<br>
If I am right, it is saying PauseText is stored at $WXYZ (just using placeholder numbers) and Low is YZ and High is WX?<br>
So, when you point to it using [TextPointer], it grabs it as $WXYZ.<br>
<br>
I hope I am right now, because I used to be so lost with this! Thanks ROTH!<br>
Sorry for all of the questions, this was good for me today...<br>
<br>
				</div><div class="mdl-card--border"></div>