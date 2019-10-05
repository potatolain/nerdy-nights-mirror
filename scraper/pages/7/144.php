<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Apr 2, 2013 at 10:30:41 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					To me it doesn&apos;t look like you&apos;re writing correctly.<br>
<br>
It should be:<br>
<br>
LDX score1<br>
LDA $2002<br>
LDA #$20 ;hi bit of place you&apos;re writing<br>
STA $2006<br>
LDA ScoreDigitTiles,x ;low bit of place you&apos;re writing<br>
STA $2006<br>
LDA NewTileNumber<br>
STA $2007<br>
<br>
LDX score2<br>
LDA $2002<br>
LDA #$20 ;hi bit of place you&apos;re writing<br>
STA $2006<br>
LDA ScoreDigitTiles,x ;low bit of place you&apos;re writing<br>
STA $2006<br>
LDA NewTileNumber ;tile of the new information you&apos;re writing<br>
STA $2007<br>
RTS<br>
<br>
Now that I can kind of make sense of your code, try this:<br>
<br>
&#xA0; LDA $2002 ;YOU WERE FORGETTING THIS<br>
&#xA0; LDA #$20;Screen location for first digit of score
<div>
	&#xA0; STA $2006</div>
<div>
	&#xA0; LDA #$4E;Location. Locations $204F and $2050 are both going to be either blank, or a DASH to seperate the digits<br>
	&#xA0; STA $2006 ;YOU WERE FORGETTING THIS</div>
<div>
	&#xA0; LDX score1</div>
<div>
	&#xA0; LDA ScoreDigitTiles,X</div>
<div>
	&#xA0; STA $2007 ;Store to 1st character to screen.</div>
<div>
	&#xA0; LDA $2007&#xA0;</div>
<div>
	&#xA0; LDA $2007;Move 2 bytes of the screen location. ;I HAD NO IDEA YOU COULD DO THIS.&#xA0; IF IT STILL DOESNT WORK, THIS IS YOUR CULPRIT</div>
<div>
	&#xA0; LDX score2</div>
<div>
	&#xA0; LDA ScoreDigitTiles,X</div>
<div>
	&#xA0; STA $2007 ;Store 2nd character to screen.</div>
<div>
	&#xA0;&#xA0;</div>
<div>
	&#xA0; RTS</div>
				</div><div class="mdl-card--border"></div>