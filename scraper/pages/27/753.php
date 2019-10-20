<div class="mdl-card__title"><strong>compile_6502</strong> posted on 
		
			
				
				Mar 28, 2016 at 9:58:16 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>thefox</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>compile_6502</b></i><br>
<br>
There is some issue involving how numbers are interpreted that I need clearing up. The manual delves into working with 8 bit numbers and how bit 7 can be used to toggle between a positive number and a negative number at the expense of using only 7 bits for the numbers themselves.<br>
<br>
The question I have is, how does the processor know when you want to work with 8-bit unsigned numbers rather than 7-bit signed numbers?</div>
It&apos;s called the&#xA0;<em>two&apos;s complement</em> representation (you can wikipedia it). It turns out that the arithmetic operations for unsigned numbers and for two&apos;s complement signed numbers are exactly the same at bit level, so the processor doesn&apos;t need to know whether you want signed or unsigned numbers. It comes down to how you as a programmer interpret the results.<br>
<br>
&#xA0;</div>
<br>
<br>
OK, I had read about two&apos;s complement, but I haven&apos;t fully understood it yet. &#xA0;Appreciate the response!
				</div><div class="mdl-card--border"></div>