<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Sep 27, 2012 at 12:16:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The A accumulator only holds 8 bits.  If you do LDA twice in a row, the first one is overwritten.  So the first 3x LDA are ignored when you do the last LDA $020F, and the same value gets written to $0203/$0207/$020B/$020F.
				</div><div class="mdl-card--border"></div>