<div class="mdl-card__title"><strong>dougeff</strong> posted on 
		
			
				
				Feb 10, 2016 at 9:56:36 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
Is there a way to just change the 2 bits in the attribute table with you disturbing the out 6 bits?<br>
<br>
For example. At $23EB, the current attribute is 11111111. Lets say, I want to change the second set to 00, so 11<strong>00</strong>1111 (so now the top right quadrant is using Palette 00). On the next players turn, I want to change the 4th set to 01, so 110011<strong>01. </strong>At any time, I want to be able to change any of those 4 sets of 2 bits.<br>
<br>
Attributes are such a pain. This seems like this should be pretty simple, I&apos;m finding that it is not.</div>
<br>
<br>
Also, you would need to determine which 2 bits you want to change with a series of if/then branches...bit shift those two bits into the correct position, and AND #, ORA # to put it in...<br>
<br>
In your example the xx00xxxx bits would be...<br>
new 2 bits loaded to A<br>
asl a<br>
asl a<br>
asl a<br>
asl a<br>
sta temp<br>
lda AttributeTableRAM_copy<br>
and #$cf ;mask out those 2 bits<br>
ora temp ;put in the new 2 bits<br>
&#xA0;
				</div><div class="mdl-card--border"></div>