<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jan 3, 2013 at 11:59:09 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Are you properly setting the location to PPU RAM/Screen RAM that you want it to display at? Plus that could be written as palette+1 since there&apos;s no loop, you don&apos;t need X. I don&apos;t exactly get what the palette means, though, as...it should be written to 3F00 inside PPU RAM, and then that&apos;s it. You don&apos;t need to touch the palette data after that. You need to display tiles, not colors. To put a score to a where it&apos;s just a single digit in two places where Score is an array of 2 bytes in RAM,byte 0 being the left player:<br>
<br>
PPUAddr=$2006;<br>
PPUData=$2007<br>
LDA #$20;Screen location for first digit of score<br>
STA PPUAddr<br>
LDA #$4E;Location. Locations $204F and $2050 are both going to be either blank, or a DASH to seperate the digits<br>
LDX Score<br>
LDA ScoreDigitTiles,X<br>
STA PPUData ;Store to 1st character to screen.<br>
LDA PPUData&#xA0;<br>
LDA PPUData;Move 2 bytes of the screen location.<br>
LDA Score+1<br>
LDA ScoreDigitTiles,X<br>
STA PPUData ;Store 2nd character to screen.<br>
(RTS,JMP,Other code, anything to keep it seperate)&#xA0;<br>
<br>
(Code data)<br>
ScoreDigitTIles:<br>
&#xA0; .db $ZeroTileNumber,$OneTileNumber ;Etc. You&apos;d need to fill this out.<br>
<br>
Or if you have the tiles in ROM that start at a number and go from 0 to 9, then you could also do this:<br>
<br>
LDA Score<br>
CLC<br>
ADC #$00 ;TIle start number here.<br>
<br>
which will produce the right digit.
				</div><div class="mdl-card--border"></div>