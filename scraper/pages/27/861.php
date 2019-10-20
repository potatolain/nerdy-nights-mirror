<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 17, 2016 at 10:24:57 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	Yes, it gets two coords as input, calculate the vector (x2-x1, y2-y1; this part can be omited if you have vector already) and returns the angle 0..255 in A. The output is as accurate as it gets with the 8 bit math.<br>
	<br>
	For better understanding, try to read something like that: <a href="https://www.raywenderlich.com/35866/trigonometry-for-game-programming-part-1" target="_blank" original-href="https://www.raywenderlich.com/35866/trigonometry-for-game-programming-part-1">https://www.raywenderlich.com/35866/trigonometry-for-game-pr...</a> </div>
<br>
<br>
<br>
Written on top of the link:<br>
&quot;&quot;&quot; might be more precise to add a clc adc #$01 after each eor #$ff, you have to modify all the preceding bcs *+4/ bcc *+4 to *+7 to get the branches correct. also you can omit the clc where bcs is used. adding a SEC before all sbc&apos;s might increase the accuracy even further. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span> /Oswald &quot;&quot;&quot;<br>
<br>
I assumed these modification were needed, were they?<br>
<br>
Also, bcs *+4, means:<br>
a) branch 4 bytes below (which is what I think)<br>
or<br>
b) branch 4 instructions below?<br>
<br>
It is a while since I toyed around with that routine, but I clearly remember it wasn&apos;t doing what I expected for it to do. The output was incorrect, at least in some scenarios. Cases are two:<br>
a) I misunderstood/misinterpreted it<br>
or<br>
b) it is not always accurate<br>
<br>
Since you are so positive about its accuracy, I guess 99.99% of chances are that I did some mistake somewhere,<br>
<br>
I&apos;m not a math genius, neither a programmer academically wise, but I think to know what an angle and its relative vectors on the X/Y axis are.<br>
<br>
Thanks a lot for any further detail. Appreciated.
				</div><div class="mdl-card--border"></div>