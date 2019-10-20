<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Dec 17, 2016 at 12:08:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>Shiru</b></i><br>
<br>
To aim a bullet you just need atan2 function. You determine the angle that way, then take deltas for required speed using a table. atan2 may sound scary, but it fast it isn&apos;t too slow, check this implementation: <a href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle" target="_blank">http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle</a><br>
<br>
If you need range more than 8 bit, you can just divide the source vector by 2, 4, etc. This will be precise enough.<br>
<br>
And of course, never use 360 degree circle on 8 bit CPU. It should be 256 degree instead.</div>
<br>
Well, I&apos;ve clearly been putting off figuring out angles for a while! Time to clear out an old bookmark and make sense of it all.<br>
<br>
I followed your link Shiru, and got the routines plugged in and working (I think anyways). I have new A, Y, and X values coming out of the routine, but I have no clue what to do with them <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>. Real programming sites don&apos;t really specify&#xA0;<em>how</em> to use the results, hahaha. I can make some things fly around the screen at what I am guessing is the correct angle, but they whiz by way too fast and are out of control. Any help would be greatly appreciated, thanks!</div>
Never used the code myself, but looks like it outputs an angle (0..255) in A and nothing else. x1, y1, x2, y2 are the input point coordinates. You can use the angle to look up a direction vector for movement from a sine/cosine table.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>