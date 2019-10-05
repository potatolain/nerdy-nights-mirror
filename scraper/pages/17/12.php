<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Oct 25, 2009 at 9:00:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					ok, progress. It had nothing to do with sound_init, sound_load, etc. It had something to do with duty cycle. In the old engine, I made a mistake, when I changed the duty cycle and had enabled the length counter and envelope volume. %10001111, was the value. In the new engine, it has to be %10111111. I had done a bad hex to binary conversion. works fine no matter where I initialize sound, etc. I knew it was probably my issue lol. once again, one damn value screwed things up.<br><br>Only thing weird now, is the tune is more fluid. before it seemed more choppy, and I haven&apos;t figured out how to get that choppy sound back.<br>
				</div><div class="mdl-card--border"></div>