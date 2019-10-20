<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 20 at 10:11:20 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Correct, you would need more tiles in order to make it seem &quot;more fluid.&quot;<br>
<br>
Your pseudo code won&apos;t really work without multiple compares, since your tile could be the same value in different orientations and you&apos;re just modifying the attribute byte to flip it.<br>
<br>
I&apos;d probably do something like.<br>
<br>
;if left or right button is pressed, increment timer<br>
;if timer &gt;=value, turn ship ;you can adjust this value to change the speed the ship turns<br>
;reset timer<br>
;look to see which of the two directions is pressed<br>
;if left, decrement lookup table value by 2<br>
;if right, increment lookup table value by 2<br>
;check to see if value wrapped off the table, and reset accordingly<br>
;store lookup table value<br>
;set lookup table value to sprite<br>
;increment lookup table value<br>
;set lookup table value to attribute<br>
;end<br>
<br>
Then you would have a lookup table for turning, including direction and attribute data for each position (obviously adjusted for more directions if you wanted it to be smoother).<br>
.db $00,$00;up<br>
.db $02,%01000000;up/right<br>
.db $01,%01000000;right<br>
.db $02,%11000000;down/right<br>
.db $00,%10000000;down<br>
.db $02;%01000000;down/left<br>
.db $01,$00;left<br>
.db $02,$00;up/left<br>
<br>
This is probably slightly more advanced than the Nerdy Nights week you&apos;re on, so just do your best and let me know if/where you get stuck. Lookup tables like this are going to be your main way of storing values for various things, so you should definitely learn how to do it. It&apos;s very similar to how your background loading code works. You&apos;re just additioanlly keeping a variable that stores where in the lookup table you are at all times, even when the button is not pressed.
				</div><div class="mdl-card--border"></div>