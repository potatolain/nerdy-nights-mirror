<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Dec 5, 2014 at 3:36:12 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	To aim a bullet you just need atan2 function. You determine the angle that way, then take deltas for required speed using a table. atan2 may sound scary, but it fast it isn&apos;t too slow, check this implementation: <a href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle" target="_blank" original-href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle">http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle</a><br>
	<br>
	If you need range more than 8 bit, you can just divide the source vector by 2, 4, etc. This will be precise enough.<br>
	<br>
	And of course, never use 360 degree circle on 8 bit CPU. It should be 256 degree instead.</div>
<br>
Thanks, gonna take a look at it this evening (Cause I need to refresh my math skills <span class="sprites_emoticons absmiddle" id="emo_tongue"></span>)<br>
<br>
				</div><div class="mdl-card--border"></div>