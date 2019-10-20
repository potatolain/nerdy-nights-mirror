<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Apr 10, 2016 at 5:40:57 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					There is a point (o) in the center of the screen: y 77 / x 7C (considering that the sprite in such point is 8x8px and must be centered, and it is rendered 1px lower).<br>
<br>
There is a second point (z) &quot;in front&quot; of (o): y 47 / x 7C, so the point (z) is 30px &quot;above&quot; (o) on the y axis.<br>
<br>
To rotate point (z) by 90&#xB0; (1/4 of a circle) on the circle centered on point (o), it is enough to bring (z) to the point x = x(o)+30 or x(o)-30, and y = y(o). So y 77 / x AC (rotating clock-wise) or x 4C (rotating counter-clock). This if my math is correct. So, if the difference on the Y axis (0px) is transfered on the X axis, and the difference on the X axis (Hex 30px) is transfered on the Y axis, point (z) rotates by 90&#xB0; (1/4 of a circle) around point (o).<br>
<br>
Rotate by 45&#xB0; (1/8 of a circle) is more tricky, but is possible to do it as well, somehow. For instance in the above case point (z) destination can be approximated at y 57 / x 9C (cw) or x 5C (cc), &quot;converting&quot; the 30px of difference on the y axis to 20px (2/3 of 30px) of difference on both axis x and y. This again if my math is correct. However, already at 45&#xB0; it starts to get complex to calculate in cases where there is a difference (in pixel position) on both the axis. And reduce the probem to a huge lookup table of all possible starting points for (z) (giving for each of these points a destination position of +/- 45&#xB0; ) is unthinkable to do I guess.<br>
<br>
Moreover, what if there is need of rotate by 22.5&#xB0; (1/16th of a circle)?<br>
<br>
I know something similar about targeting has been asked not too long ago, but that solution I fear does not solve this specific need. I know what I wish to do, but I&apos;m not too sure on what is the best way to apply simple trigonometry on 8 bit math. I&apos;m confident there is a simple way (I just can&apos;t think of) to do it. Please help if you can.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
<strong>Edit</strong>: the symbol &quot;&#xB0;&quot; followed by &quot;)&quot; was changed to a smiley &quot; &#xB0;<span class="sprites_emoticons absmiddle" id="emo_wink"></span> &quot;, corrected.
				</div><div class="mdl-card--border"></div>