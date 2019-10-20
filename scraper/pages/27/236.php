<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 24, 2014 at 2:27:50 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So, I need a way to check if I have exceed a limit.<br>
<br>
Is this how I do it?<br>
<br>
<br>
Subroutine:<br>
&#xA0;&#xA0; LDA Variable<br>
&#xA0;&#xA0; CMP #$50<br>
&#xA0;&#xA0; BMI SubroutineDone &#xA0;&#xA0;<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; CODE TO RUN<br>
<br>
SubroutineDone:<br>
&#xA0; RTS<br>
<br>
<br>
Basically, when Variable hits 50 or any number above 50, I want to run CODE TO RUN.<br>
<br>
The issue is, I am incrementing Variable with different number (1,2,3,4,5), so my program may not always hit 50.<br>
<br>
Thanks<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>