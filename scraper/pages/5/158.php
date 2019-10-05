<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 26, 2017 at 12:40:41 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Piputkin3</b></i><br>
<br>
I had a latch controller.<br>
But I did&apos;t know that everywhere had to be BEQ. Thank you very much for your help.</div>
Yup.<br>
<br>
We only care about Bit 0 of $4016. Every time you read $4016 (LDA $4016), it automatically jumps to the next button. If that button is pressed, $4016 will be equal to %00000001. If the button is not pressed, it will be equal to %00000000. This is why we do the AND %00000001. We only check if the Bit 0 is equal to 1.<br>
<br>
So, if the button is pressed, this it what will happen:<br>
LDA $4016&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;$4016=%00000001 because the button is pressed.<br>
AND #%00000001&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; ANDing $4016 and %00000001 = %00000001<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;whenever there is no CMP before a Branch, then CPU sees it as CMP #$00 (compare to #$00 or #%00000000)<br>
BEQ NextButton&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Jump to Next Button if Equal to %00000000. In this case, it is not equal because our value is #%00000000, so we continue to the Run Code.<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Run Code<br>
NextButton:<br>
<br>
To move on the next button, we simply just read LDA $4016 again. Do this until you have read all 8 buttons on the controller.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>