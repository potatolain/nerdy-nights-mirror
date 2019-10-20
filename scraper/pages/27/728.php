<div class="mdl-card__title"><strong>insomniakc</strong> posted on 
		
			
				
				Jan 26, 2016 at 10:20:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Actually, yeah. I think I made an incorrect assumption that bank switching was the culprit. Still, my code doesn&apos;t seem to work if I do the attribute loading before Infin, for example, which is why I thought the updating was what was wreaking havoc. I&apos;ve had such a headache with attributes over the past 24 hours that I don&apos;t think I&apos;ll ever forget to put that bit of code in the right spot! right now it&apos;s resting comfortable in a subroutine which is called during a game state subroutine, loaded by the engine-start subroutine... which is called during infin. I have it set up so that it happens before everything else, and that seems to do the trick. It jumps back to infin and re-writes the attributes, which fixes any glitches which would otherwise happen. I&apos;m still learning. And yes MMM, we did have this discussion before, but I have a thick skull that is like an old car that won&apos;t start sometimes when learning new info hahaha.
				</div><div class="mdl-card--border"></div>