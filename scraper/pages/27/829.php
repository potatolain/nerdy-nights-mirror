<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jun 30, 2016 at 2:05:16 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>thefox</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>thefox</b></i><br>
<br>
If my memory serves me right, NESASM uses LOW() and HIGH() instead of &lt; and &gt;. ROM usage is not any worse than in your own example (with the additional benefit of simplified code). This will get you to 256 entries. If you need more than that, you&apos;ll have to use indirect addressing.<br>
<br>
EDIT: got ninjaed.</div>
<br>
So, am I assuming this correctly?<br>
...<br>
uses the same about of ROM as<br>
...<br>
Because the example is only storing 1 byte per entry and the 2nd example is using 2 bytes per entry?<br>
<br>
Do I still use .word or do I use .db now?</div>
Apart from the mistake of using .word for TableLo/TableHi (should be .byte, or was it .db in NESASM?), yeah, those would use the same amount of ROM space.<br>
&#xA0;</div>
Yeah, .db in NESASM. This makes complete sense then on why that uses the same ROM space. Thanks everyone!<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>