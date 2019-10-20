<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Dec 16, 2016 at 6:24:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	To aim a bullet you just need atan2 function. You determine the angle that way, then take deltas for required speed using a table. atan2 may sound scary, but it fast it isn&apos;t too slow, check this implementation: <a href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle" target="_blank">http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle</a><br>
	<br>
	If you need range more than 8 bit, you can just divide the source vector by 2, 4, etc. This will be precise enough.<br>
	<br>
	And of course, never use 360 degree circle on 8 bit CPU. It should be 256 degree instead.</div>
<br>
Well, I&apos;ve clearly been putting off figuring out angles for a while! Time to clear out an old bookmark and make sense of it all.<br>
<br>
I followed your link Shiru, and got the routines plugged in and working (I think anyways). I have new A, Y, and X values coming out of the routine, but I have no clue what to do with them <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>. Real programming sites don&apos;t really specify&#xA0;<em>how</em> to use the results, hahaha. I can make some things fly around the screen at what I am guessing is the correct angle, but they whiz by way too fast and are out of control. Any help would be greatly appreciated, thanks!<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>