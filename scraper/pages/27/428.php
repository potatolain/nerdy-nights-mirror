<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 4, 2014 at 6:48:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					To aim a bullet you just need atan2 function. You determine the angle that way, then take deltas for required speed using a table. atan2 may sound scary, but it fast it isn&apos;t too slow, check this implementation: <a href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle" target="_blank" original-href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle">http://codebase64.org/doku.php?id...</a><br>
<br>
If you need range more than 8 bit, you can just divide the source vector by 2, 4, etc. This will be precise enough.<br>
<br>
And of course, never use 360 degree circle on 8 bit CPU. It should be 256 degree instead.
				</div><div class="mdl-card--border"></div>