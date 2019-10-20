<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 25, 2014 at 10:13:58 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So, it may have been a fluke, but bcc seems like a faster command than bmi how I was using it. From 6502.org, here is the bast ways to do all comparisons:<br>
<br>
If the Z flag is 0, then A &lt;&gt; NUM and BNE will branch<br>
If the Z flag is 1, then A = NUM and BEQ will branch<br>
If the C flag is 0, then A (unsigned) &lt; NUM (unsigned) and BCC will branch<br>
If the C flag is 1, then A (unsigned) &gt;= NUM (unsigned) and BCS will branch<br>
<br>
Link: <a href="http://www.6502.org/tutorials/compare_beyond.html#1.1" target="_blank">http://www.6502.org/tutorials/com...</a><br>
<br>
So basically:<br>
BNE to check for not equal &lt;&gt;<br>
BEQ to check for equal =<br>
BCC to check for less than &lt;<br>
BCS to check for greater than equalto &gt;=
				</div><div class="mdl-card--border"></div>