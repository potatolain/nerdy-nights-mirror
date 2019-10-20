<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Nov 19, 2015 at 5:43:35 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					This is not working for me.&#xA0; Basiscally, I&apos;m trying to load TextPointer with the name of the person I want to write to the screen based on the choice made by the player on what character they want to play as. The choice is supposed to be taken from the word table and populated itn TextPointer.<br>
It either writes the wrong name or garbage tiles to the screen. This is all written while the PPU is off. What you see here is the Last Name for the Character of Player 2. I am also trying to run this for First and Last Name of Player 1 and First Name of Player 2. So I basically do this 4 times with different variables and values. CharChoiceP2 is loaded with $00-$09 (that part is working and varified with the Hex Editor on the Emulator, so that is not the issue. Assume this part is working correctly.<br>
<br>
;;;;;;;;;;;;;;Variables;;;;;;;;;;;;;;;;;<br>
TextPointer &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;.rs 2&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;001B Points to the database that has the text we want to write to the screen<br>
&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;001C<br>
CharChoiceP2&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;.rs 1&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;;006E Keeps track of what character picked as P2<br>
NamePointer&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;.rs 2<br>
<br>
<br>
;;;;;;;;;;;;;;;;;;Load Variables;;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; LDA CharChoiceP2&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Lets Say this is $05 for ShortText (Short is used in assembly so I had to add Text to the name)<br>
&#xA0; TAX<br>
&#xA0;<br>
&#xA0; LDA LastName,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;This (by my logic) should load TextPointer with &apos;ShortText&apos;<br>
&#xA0; STA TextPointer<br>
&#xA0; LDA LastName+1,x<br>
&#xA0; STA TextPointer+1<br>
<br>
&#xA0; LDA #$07&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Just a counter so the loop goes 7 times<br>
&#xA0; STA TEXTLENGTH&#xA0;<br>
<br>
&#xA0; LDA #$F7&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Screen Location where the tiles are to be placed<br>
&#xA0; STA TEXTLOWBYTE &#xA0;<br>
&#xA0; LDA #$20<br>
&#xA0; STA TEXTHIGHBYTE<br>
<br>
&#xA0; JSR LoadText&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Start loading the tiles to the Screen<br>
<br>
&#xA0; LastName:<br>
&#xA0; .word Jones,Mays,Schott,Wallis,Baggs,ShortText<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&#xA0; 00&#xA0;&#xA0; ,&#xA0; 01&#xA0; ,&#xA0; 02&#xA0; ,&#xA0; 03&#xA0;&#xA0; ,&#xA0;&#xA0; 04&#xA0; ,&#xA0;&#xA0; 05<br>
<br>
<br>
;;;;;;;;;;;;;;;;;;;Load Text to Screeb Loop;;;;;;;;;;;;<br>
LoadText:<br>
&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; read PPU status to reset the high/low latch<br>
&#xA0; LDA TEXTHIGHBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the high byte of $2000 address<br>
&#xA0; LDA TEXTLOWBYTE<br>
&#xA0; STA $2006&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write the low byte of $2000 address<br>
&#xA0; LDY #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start out at 0<br>
<br>
LoadTextLoop:<br>
&#xA0; LDA [TextPointer], y&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (background + the value in x)<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; write to PPU<br>
&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; CPY TEXTLENGTH&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare Y to TEXTLENGTH (Set $07 because all my .dbs are 7 tiles long)<br>
&#xA0; BNE LoadTextLoop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; RTS<br>
<br>
Jones:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;00<br>
&#xA0; .db $13,$18,$17,$0e,$1c,$24,$24<br>
Mays:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;01<br>
&#xA0; .db $16,$0a,$22,$1c,$24,$24,$24<br>
Schott:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;02<br>
&#xA0; .db $1C,$0C,$11,$18,$1D,$1D,$24<br>
Wallis:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;03<br>
&#xA0; .db $20,$0a,$15,$15,$12,$1c,$24<br>
Baggs:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;04<br>
&#xA0; .db $0B,$0A,$10,$10,$1C,$24,$24<br>
ShortText:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;05<br>
&#xA0; .db $1c,$11,$18,$1b,$1d,$24,$24<br>
<br>
<br>
OUTPUT = WALLIS&#xA0;&#xA0;&#xA0; &lt;------WHY????
				</div><div class="mdl-card--border"></div>