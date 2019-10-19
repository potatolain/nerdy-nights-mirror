<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 11, 2015 at 11:55:54 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br>
<br>
But this does:<br>
<br>
LDA TempBinary<br>
CLC<br>
ADC HexValue<br>
STA TempBinary<br>
<br>
LDA TempBinary+1<br>
CLC&#xA0; ;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &lt;-- WHY?<br>
ADC HexValue+1<br>
STA TempBinary+1</div>
I admit that I&apos;m not too sure about what you are trying to achieve here, but if in your code in case of overflow of the first ADC the second ADC must be increased by an extra 01, then I think you should not clear the carry before the second ADC. Again, probably I misunderstood your goals here, I see no references to this snippet of code in bunnyboy post.
				</div><div class="mdl-card--border"></div>