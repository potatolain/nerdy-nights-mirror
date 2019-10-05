<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Feb 15, 2012 at 12:17:33 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Basically what Memblers is saying is this:
<br>
<br>  LDA PartialVariable
<br>  CLC
<br>  ADC #$80    ;any speed here.
<br>  STA PartialVariable
<br>  LDA $0200
<br>  ADC #$00    ;any speed here. (usually #00 or #01 unless your stuff is moving super fast)
<br>  STA $0200
<br>
<br>You have control over two addresses now, with this way giving you a ton more speed options.  The downside to this is you have to have a partialvariable for every sprite you want more control over. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>