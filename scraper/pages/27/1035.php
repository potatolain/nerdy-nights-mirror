<div class="mdl-card__title"><strong>Nallebeorn</strong> posted on 
		
			
				
				Jul 15 at 10:45:28 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Your clrmem routine is wrong. You use $0200 as the OAM buffer, but you&apos;re clearing $0300 with $fe and $0200 with zeroes. That means you get a bunch of sprites with $00 for all values, which of course means tile $00 at position (0; 0) with palette 0. And don&apos;t forget that the sprites data at the bottom is commented out at the moment, so your LoadSprites loop will be loading garbage data, which will probably be a bunch of zeroes again since that&apos;s what assemblers generally fill unused ROM space with.
				</div><div class="mdl-card--border"></div>