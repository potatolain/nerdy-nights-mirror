<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 7, 2012 at 11:33:38 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					It looks to me that you&apos;re telling $2000 to use the wrong palettes for the sprite/background (unless your comments are just wrong).  You should be doing LDA #%10001000 STA $2000, but currently you&apos;re doing LDA #%10010000 STA $2000.
				</div><div class="mdl-card--border"></div>