<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Dec 23, 2012 at 11:57:37 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You use the PPUMask ($2001) register. You disable rendering in vblank. (Outside of vblank will cause cheap and shitty looking screen tearing) (NOTE: You must stop background AND sprite rendering, not one or the other) But then you upload the other screen (the nametable) and then wait for vblank and turn on the screen again with PPUMask. Make sense? <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>