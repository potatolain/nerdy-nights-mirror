<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Dec 12, 2007 at 12:30:05 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><begin quote><i>Originally posted by: <b>dangevin</b></i>
 How many refreshes does the NES display per second?</begin></div><br>
NES is 60 fps on NTSC, 50 fps on PAL.  Any flickering will just look annoying.  When games have lots of stuff on screen they will reorder sprites so the same one isn&apos;t always hidden but you should be able to avoid that.
<br><br><br><br><div class="FTQUOTE"><begin quote><i>Originally posted by: <b>dangevin</b></i>
Is there enough time to update all 32 of these tiles plus other sprites during vblank? </begin></div><br>
Wait for week 4!  <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-wink.gif">  On NTSC you have enough vblank time to update all 64 sprites, and about 3 rows or columns of background.  Your game should only have to update a maximum of 1 row for stuff scrolling in, then maybe another row worth for status bar and erasing step chart arrows that were hit.  Some games like Battletoads will turn the screen on late or turn it off early to get more vblank time.
<br><br>
<div class="FTQUOTE"><begin quote><i>Originally posted by: <b>dangevin</b></i>
Although 2player mode is possible with a four-score I don&apos;t think I&apos;ll be programming that into this first foray</begin></div>
If you are sticking to 1 player, you can rotate everything 90 degrees and have the step chart scrolling from right to left.  That way on a scanline there are only 4 sprites for one large static arrows.  It will also give you more look ahead from the longer screen and not having the status bar in the way.  Only thing to make sure is that the ok/good/great either use 4 or fewer sprites, or just go on a line that doesnt have static arrows.
				</div><div class="mdl-card--border"></div>