<div class="mdl-card__title"><strong>Alder</strong> posted on 
		
			
				
				May 4, 2016 at 12:45:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					By &quot;buffering&quot; do you mean calculating as much of your redraw data as possible outside of vblank?  
<br>
<br>My hex conversion routine always reads from the same two-byte variable (myWord) and stores the result in the global temporary myDec variable.
<br>Is that considered bad practice?  Every time I convert I have to store my input in the myWord variable, then copy the output from myDec to another 5-byte variable.
<br>Previously I was using myDec in-place when drawing the score.  But to save vblank time, I added two variables (player1ScoreDec and player2ScoreDec) and change those when the score changes, then later redraw using them.  That seems to work okay.
				</div><div class="mdl-card--border"></div>