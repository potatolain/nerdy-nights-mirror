<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Nov 19, 2015 at 7:03:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Replace your upper part with this and remember, you always need to ASL A when you&apos;re going into a pointer table.<br>
<br>
&#xA0; LDA CharChoiceP2<br>
&#xA0; ASL A<br>
&#xA0; TAY<br>
&#xA0; LDA LastName,y<br>
&#xA0; STA TextPointer<br>
&#xA0; LDA LastName+1,y<br>
&#xA0; STA TextPointer+1<br>
<br>
&#xA0; LDA #$07 ;Just a counter so the loop goes 7 times<br>
&#xA0; STA TEXTLENGTH<br>
<br>
&#xA0; LDA #$F7 ;Screen Location where the tiles are to be placed<br>
&#xA0; STA TEXTLOWBYTE<br>
&#xA0; LDA #$20<br>
&#xA0; STA TEXTHIGHBYTE<br>
<br>
&#xA0; JSR LoadText ;Start loading the tiles to the Screen
				</div><div class="mdl-card--border"></div>