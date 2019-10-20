<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				May 16, 2013 at 11:25:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Even though an one-way scrolling engine could contain not that much more code compared to a single screen game, that does not mean it is &apos;not than much&apos; more complex than a single screen game. It is non-linear relation, scrolling introduces a number of problems to solve, making code considerable more complex. Like, world space in 16-bit coordinates (at least) with &apos;virtual camera&apos;; unpacking level data row by row, as unpacked scrolling levels take a lot of room; updating video memory when needed; keeping status bar static via screen split or something; sprites that could go offscreen - a range of subproblems, as you can&apos;t now process all enemies on a level like in a single screen game, you have to keep amount of simultaneously processed enemies reasonable in some way. Also, while you can easily code a level for a single screen game without extra tools, you&apos;ll sure will need a custom map editor or a converter from some general map format - something that&apos;ll allow to edit large levels and pack them into your custom format. So you may need skills of PC programming as well.
<br>
<br>Bottom line: there is a reason why so many homebrew games are single screen ones, and the reason is because it is noticeably easier. So don&apos;t start with a scrolling game like SMB right away.
				</div><div class="mdl-card--border"></div>