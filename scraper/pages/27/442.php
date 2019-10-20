<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Dec 13, 2014 at 5:24:22 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DoNotWant</b></i><br>
	<br>
	So, first of all; how do you keep an 8.8(signed) variable between -n and n(e.g. -$02.$80 and $02.$80)</div>
Clamp the value: if it&apos;s less than the minimum, set it to the minimum, if it&apos;s over the maximum, set it to the maximum. See&#xA0;<a href="http://www.6502.org/tutorials/compare_beyond.html#6" target="_blank" original-href="http://www.6502.org/tutorials/compare_beyond.html#6">http://www.6502.org/tutorials/compare_beyond.html#6</a> for how to compare two signed 16-bit values (result in N).<br>
<br>
You have to make sure that no overflow can occur in whatever operation you do before the clamp.<br>
<br>
<div class="FTQUOTE" "width: 697.59375px;">
	<i>Originally posted by:&#xA0;<b>DoNotWant</b></i><br>
	<br>
	and how could you increment/decrement the value of this 8.8 fixed-point number by x(8-bit number)?</div>
This is just normal addition, same as for unsigned non-fixed-point numbers.
				</div><div class="mdl-card--border"></div>