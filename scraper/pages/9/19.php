<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 12, 2015 at 6:19:54 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br>
<br>
To be honest, I&apos;m not sure at this point . Sadly, all I know is that my addition and subtraction routines work flawlessly, so far as I&apos;ve been able to test them. Can&apos;t really argue with results, but I&apos;m still curious about the transfer of values (or why a simple transfer won&apos;t work, but an addition is required).</div>
The way I see it, there are 3 values:<br>
<strong>- HexValue<br>
- TempBinary<br>
- carry</strong><br>
<br>
The Carry flag can be either 1 (if the flag is set) or 0 (if the flag is not set, or reset).<br>
<br>
CLC means that you reset the carry flag to 00, so when you sum the value in the accumulator with the value after the opcode ADC, you will not add also +01.<br>
Since there is not an instruction ADD WITHOUT CARRY, when you use ADC and you don&apos;t want the carry flag to influence the result, you just set the carry to 0.<br>
In the example you posted above, you CLC twice, which is ok if it is what you need. Instead if you wish that an overflow in the first ADC adds +01 to the result of the second ADC, then you avoid that second CLC instruction.<br>
<br>
As MegaMarioMan pointed out, this code:
<pre>  LDA HexValue
  STA TempBinary</pre>
is different than this code:<br><br><pre>  LDA TempBinary
  CLC
  ADC HexValue
  STA TempBinary</pre>
Let say HexValue is == &quot;x&quot;, TempBinary is == &quot;y&quot;.<br>
(&quot;x&quot; and &quot;y&quot; are two values)<br>
<br>
In the first case, after running your code, TempBinary will be == &quot;x&quot;, because that is what you store into it with such code.<br>
<br>
In the second case, after running your code TempBinary will be == &quot;y&quot;+Hex00+&quot;x&quot;, since you load the old value, then you add the carry, and you add HexValue. In the socond case you are not moving a value from a variable to another, but you are summing, adding also the carry, the two values, and you are storing that result into TempBinary.<br>
<br>
I feel like likely I am missing something you are trying to explain, but I think that if you look at your own two snippets of code for like 20 seconds, you will immediately realize that they don&apos;t do the same thing at all, math wise. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
Hope this helps. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>