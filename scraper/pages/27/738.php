<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Feb 9, 2016 at 11:46:20 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
Is there a way to just change the 2 bits in the attribute table with you disturbing the out 6 bits?<br>
<br>
For example. At $23EB, the current attribute is 11111111. Lets say, I want to change the second set to 00, so 11<strong>00</strong>1111 (so now the top right quadrant is using Palette 00). On the next players turn, I want to change the 4th set to 01, so 110011<strong>01. </strong>At any time, I want to be able to change any of those 4 sets of 2 bits.<br>
<br>
Attributes are such a pain. This seems like this should be pretty simple, I&apos;m finding that it is not.</div>
<br>
Sorry to do this. I&apos;m going to answer my own question with a question! <span class="sprites_emoticons absmiddle" id="emo_happy"></span><br>
<br>
This is what I assume I must do. I must start by getting the current value of %11111111 out of $23EB.<br>
<br>
LDA $2002<br>
LDA #$23<br>
STA $2006<br>
LDA #$EB<br>
STA $2006<br>
LDA $2007<br>
STA attribute_RAM<br>
<br>
So, if I am correct, attribute_RAM = %11111111????<br>
<br>
I&apos;m assuming, I would now have to manipulate attribute_RAM and then write that back to $23EB?<br>
&#xA0;
				</div><div class="mdl-card--border"></div>