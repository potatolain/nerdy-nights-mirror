<div class="mdl-card__title"><strong>That Old Au Guy</strong> posted on 
		
			
				
				Oct 15, 2015 at 11:47:13 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Optimization. Optimize optimize optimize. Let&apos;s say you have 256 or so items. Are you really going to get all 255 of them in your inventory? If you&apos;re only going to get at most one, well, each byte has 8 bits; this means that your 256 unique items can be in 16B rather than eat up 256B. Or even with 99 items, you can place a limit of 128, thus each item requires 7b rather than 8b/1B, and you have an extra 16B for whatever. It&apos;s slower in run-time, yes, but if you&apos;re itching for RAM, you&apos;re going to need to do this and get those few extra bytes free.
				</div><div class="mdl-card--border"></div>