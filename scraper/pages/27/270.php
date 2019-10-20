<div class="mdl-card__title"><strong>NESHomebrew</strong> posted on 
		
			
				
				May 19, 2014 at 2:56:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>HerpDerpDerp</b></i><br>
	<br>
	I&apos;m on Nerdy Nights week 2 and I want to know what&apos;s meant by 8 sprites per scanline. What exactly are sprites? Are they tiles or are they groups of tiles?</div>
A scanline is a single horizontal row of pixels.&#xA0; Sprites are objects that are independent from the background.&#xA0; When you think of sprites, think of moving bullets or walking enemies.&#xA0; Each sprite can be either 8x8 or 8x16 pixels.&#xA0; For general size reference, in Super Mario Bros, the &quot;?&quot; block is 16x16 pixels.<br>
<br>
So, the 8 sprites per scanline limit means that if you place 9 sprites overlapping the same scanline, the 9th will not be visible.&#xA0; Certain games use tricks to cycle sprites causing flickering when there are more than 8 sprites on a scanline. This way you will still be able to see the object without it completely disappearing.
				</div><div class="mdl-card--border"></div>