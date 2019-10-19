<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Oct 12, 2015 at 2:58:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br>
<br>
The 16-bit one in the OP. I guess I am also curious why I cannot add to the TempBinary variables directly, but have to buffer them through another variable instead (i.e. load a value into a variable, and then add this to TempBinary).<br>
<br>
EDIT: regardless, what I am curious about is how to modify these values correctly, and not necessarily how to correct my own code.<br>
<br>
Double Edit: took a break and figured it out. Well, re-figured it out since I had it figured out a couple weeks ago, but I lost it due to not being able to work on it. The TempBinary is not the value itself (duh!), therefore it does not matter what I do to it. Though I still feel as though there should be a way to alter it directly. Anyways...<br>
<br>
So the only question that I have left is: why does the value have to be added to TempBinary? Why cannot it simply be stored? In other words, this does not work:<br>
<br>
<strong>LDA HexValue<br>
STA TempBinary<br>
LDA HexValue+1<br>
STA TempBinary+1</strong><br>
<br>
But this does:<br>
<br>
<strong>LDA TempBinary<br>
CLC<br>
ADC HexValue<br>
STA TempBinary<br>
<br>
LDA TempBinary+1<br>
CLC<br>
ADC HexValue+1<br>
STA TempBinary+1</strong><br>
<br>
I&apos;m bracing for a lesson in the Carry...</div>
Assume for this example<br>
HexValue = 2<br>
TempBinary = 1<br>
<br>
<br>
<strong>LDA HexValue<br>
STA TempBinary<br>
LDA HexValue+1<br>
STA TempBinary+1</strong><br>
<br>
This would replace the values in TempBinary and TempBinary+1 with the values in HexValue and HexValue+1. So, HexValue = TempBinary. or 2=2<br>
=======================================================================<br>
<br>
<strong>LDA TempBinary<br>
CLC<br>
ADC HexValue<br>
STA TempBinary<br>
<br>
LDA TempBinary+1<br>
CLC<br>
ADC HexValue+1<br>
STA TempBinary+1</strong><br>
<br>
This would Load the value of TempBinary, add HexValue, and then write the sum value to TempBinary. So, TempBinary+HexValue = TempBinary.&#xA0; 1+2=3<br>
<br>
Hope that is what you were asking.<br>
&#xA0;
				</div><div class="mdl-card--border"></div>