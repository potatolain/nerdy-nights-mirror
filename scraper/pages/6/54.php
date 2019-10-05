<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Feb 9, 2012 at 10:45:02 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m also having trouble with this like others before me and I think it&apos;s because I don&apos;t understand the nametable attributes. I&apos;m trying to load a full background of one specific tile repeated 960 times. This is what I have, and I&apos;m still getting a background of zeros:<br>
<br>
LoadBackground:<br>
LDA $2002 ; read PPU status to reset the high/low latch<br>
LDA #$20<br>
STA $2006 ; write the high byte of $2000 address<br>
LDA #$00<br>
STA $2006 ; write the low byte of $2000 address<br>
LDX #$00 ; index set to 0<br>
LDY #$00<br>
LoadBackgroundLoop:<br>
LDA #$24 ;<br>
STA $2007 ; write to PPU<br>
INY ;Background is 32x30 ($20 x $1E) sprites, so 960 bytes<br>
CPY #$20<br>
BNE LoadBackgroundLoop<br>
INX<br>
CPX #$1E&#xA0; ;This swaps with line below<br>
LDY #$00&#xA0;&#xA0; ;This swaps with line above<br>
BNE LoadBackgroundLoop<br>
<br>
EDIT: Figured it out.&#xA0; Had to swap the two lines as noted in the comments in the code above.&#xA0; I was constantly doing a compare, then the branch is referencing Y, not the result of the compare, so the loop never completed.&#xA0; The ordering of code in this language is so sensitive it can drive you nuts! haha <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>