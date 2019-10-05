<div class="mdl-card__title"><strong>dangevin</strong> posted on 
		
			
				
				Dec 11, 2007 at 1:43:23 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					How do dual-backgrounds work? I guess I get a choice for which one to display first. So for DDR, I can
<br>
<br>1. display Bkgd-1, the &quot;movie&quot; background with &quot;visualizations&quot; and the 4 static arrows at the top of the screen. These would be illuminated with palette swaps. I don&apos;t think they could be scrolled unless there&apos;s a way to always write the static arrows to the same portion of the screen? Perhaps only doing a lateral scroll for the area below them on-screen (after pixel 24-down) if that&apos;s possible?
<br>
<br>...then 2. display Bkgd-2, the stepchart, which scrolls from bottom to top.
<br>
<br>...and 3. display sprites, such as combo counter text, &quot;Perfect&quot; or &quot;Great&quot; feedback, etc.
<br>
<br>and that will effectively do what I want to do? This allows for big 4x4 tile arrows, an unlimited number of steps onscreen (well, as opposed to using sprites) and I can still get the arrows to flash wth the beat by palette-swapping them during vblank when I scroll.
				</div><div class="mdl-card--border"></div>