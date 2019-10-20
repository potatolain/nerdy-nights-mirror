<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Dec 13, 2014 at 6:04:55 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>thefox</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>DoNotWant</b></i><br>
		<br>
		So, first of all; how do you keep an 8.8(signed) variable between -n and n(e.g. -$02.$80 and $02.$80)</div>
	Clamp the value: if it&apos;s less than the minimum, set it to the minimum, if it&apos;s over the maximum, set it to the maximum. See&#xA0;<a href="http://www.6502.org/tutorials/compare_beyond.html#6" target="_blank" original-href="http://www.6502.org/tutorials/compare_beyond.html#6">http://www.6502.org/tutorials/compare_beyond.html#6</a> for how to compare two signed 16-bit values (result in N).<br>
	<br>
	You have to make sure that no overflow can occur in whatever operation you do before the clamp.<br>
	<br>
	<div class="FTQUOTE" width:>
		<i>Originally posted by:&#xA0;<b>DoNotWant</b></i><br>
		<br>
		and how could you increment/decrement the value of this 8.8 fixed-point number by x(8-bit number)?</div>
	This is just normal addition, same as for unsigned non-fixed-point numbers.</div>
I have read that document 4 or 5 times now, I still don&apos;t seem to grasp the later stuff. I&apos;d show you my code, if it were not a cluster fuck. I&apos;ll go through it again and see if I can get it to work, or at least clean it up a bit.<br>
<br>
I knew about the clamping BTW, I just have trouble doing it. Not for the positive numbers, but the negative. Obviously it&apos;s something that I don&apos;t grasp yet, but I&apos;m starting to feel like a retard over here.<br>
<br>
<pre>  LDA NUM1L ; NUM1-NUM2
  CMP NUM2L
  LDA NUM1H
  SBC NUM2H
  BVC LABEL ; N eor V
  EOR #$80
LABEL</pre>
What is the use of CMP here? Wouldn&apos;t the zero flag get mangled by LDA NUM1H?<br>
<br>
Thanks!<br>
<br>
<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>