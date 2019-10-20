<div class="mdl-card__title"><strong>rizz</strong> posted on 
		
			
				
				Jul 8, 2014 at 1:49:14 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	LDX #$00<br>
	LDA #$00<br>
	AttriSpr_Loop:<br>
	STA $0202,x<br>
	JSR Increase_Four ;Only one attribute is used<br>
	CPX #$02<br>
	BNE AttriSpr_Loop<br>
	<br>
	RTS</div>
<br>
At a glance, it looks like CPX #$02 would cause an endless loop.&#xA0; It&apos;s initialized with 0, and then would go to 4,8,12, etc.&#xA0; Eventually it would get to 248, 252, and then loop back to 0, 4, 8, etc.<br>
<br>
PHA &amp; PLA are for setting aside the current value in the accumulator (usually because you are going to use it for something else), and then getting the previous accumulator value back in there.&#xA0; You could use a byte in RAM to store the accumulator temporarily too, but that would use up a valuable byte (the PHA &amp; PLA make use of the Stack).<br>
<br>
I have found it very useful to use PHA &amp; PLA when I&apos;m entering and exiting subroutines, but I use it more for X &amp; Y register safety.&#xA0; Example:<br>
<br>
&#xA0; LDX #0<br>
&#xA0; Loop1:<br>
&#xA0; JSR Subroutine1<br>
&#xA0; INX<br>
&#xA0; CPX #4<br>
&#xA0; BNE Loop1<br>
&#xA0;<br>
Subroutine1:<br>
&#xA0; TXA<br>
&#xA0; PHA<br>
&#xA0; lines of code that make use of the X register<br>
&#xA0; PLA<br>
&#xA0; TAX<br>
&#xA0; RTS<br>
				</div><div class="mdl-card--border"></div>