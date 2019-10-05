<div class="mdl-card__title"><strong>Sivak</strong> posted on 
		
			
				
				Jun 24, 2008 at 2:35:52 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yeah, you need to do graphical updates quickly in one frame of NMI, but you also need to do other things as well.  I recall running into problems with Pillars.  I used a bad multiplication routine that worked, but whenever huge numbers were in the mix, it would cause the game to freeze.  I made a much better routine that only needs do do a loop 8 times.
<br>
<br>Another similar thing was when you get 3 in a row, it redraws the entire background of the play area, but the process is done across 4 frames.  That routine was very hard to get right.
				</div><div class="mdl-card--border"></div>