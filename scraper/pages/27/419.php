<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Nov 18, 2014 at 4:57:00 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div>
	Rewrote my routine, but I have the same problem on real hardware using flashcarts... Please help me <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
	The CHR banks are supposed to be those in case_bank, but it glitches up on real hardware...</div>
<div>
	&#xA0;</div>
<div>
	&#xA0; LDX CharNumber</div>
<div>
	&#xA0; LDA case_bank,x</div>
<div>
	&#xA0; JSR Background_Select ;$C000 MMC1 writes</div>
<div>
	&#xA0;</div>
<div>
	;Blahblahblahworkingcodeblahblahblah</div>
<div>
	&#xA0;</div>
<div>
	case_bank:</div>
<div>
	&#xA0; .db $03,$03,$03,$03,$03,$04,$04,$04,$04,$04,$05,$05,$05,$05,$05</div>
<div>
	&#xA0; .db $06,$06,$06,$06,$06,$07,$07,$07,$07,$07,$08,$08,$08,$08,$08</div>
<div>
	&#xA0;</div>
<div>
	Do you know what&apos;s wrong?</div>
				</div><div class="mdl-card--border"></div>