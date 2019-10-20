<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Dec 11, 2007 at 3:35:14 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					There is only one layer of background, the 2 screens worth are arranged next to each other either vertically or horizontally.  They cannot be placed on top of each other.  What you can do is switch between those 2 screens part way down the screen.  The SMB screen is a good example of this.  The status bar is fixed at the top, not scrolling.  Then when the last scanline is drawn the game switches to the game background, which does scroll. Yes this may be more confusing  <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"> <br><br><br><br>For DDR you will have to limit the arrow sizes to avoid the 8 sprites per scanline limit.  You need 4 static arrows, so if you used sprites they could only be 2x2 tiles maximum.  You will also need the stepchart, which could have more than 2 arrows horizontally (start of two arrows overlapping end of two others).  So if those used sprites it couldn&apos;t be more than 2x2 tiles.  You only get 64 sprites so if the stepchart was sprites there could only be 16 steps on screen.  You want the static arrows to be on top of the stepchart so they can&apos;t both use the background.<br><br>
I would do the non scrolling status bar like SMB, either at the top or bottom depending on which way the stepchart scrolls.  Then you have the stepchart as a scrolling background.  Since it is background you can do those arrows as big as you want.  The screen is only ~28 tiles tall, so you probably don&apos;t want arrows bigger than 2x2 or not enough will be on screen.    When the step is hit correctly, you erase the arrow from the background.  Then you have the static arrows as sprites.  They can either be in front or behind the stepchart arrows.  And finally more sprites for the ok/good/great messages, because those also do not scroll and will be in front of the stepchart.<br><br>If you wanted 2 player then you could do stepchart as 2x2 arrows, then use 1x1 for the static arrows so there can be 8 across.  The static ones would be centered horiz on the stepchart ones.
				</div><div class="mdl-card--border"></div>