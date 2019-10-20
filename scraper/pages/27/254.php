<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				May 4, 2014 at 1:19:32 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					That&apos;s happening while NMIs are turned off and filling an entire nametable. One problem I see with what you want to do is that it seems to be using the first palette for all of the background, since it is LDA #$00 STA $2007 and does it for all 64 bytes of the attribute table (the LDY #$40/ DEY / etc). You&apos;d need to find a way (and find room) to make some sort of subroutine that writes what you want in a specific place before the screen is turned back on.
				</div><div class="mdl-card--border"></div>