<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 21 at 2:27:04 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>KHAN Games</b></i><br>
<br>
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
This is probably slightly more advanced than the Nerdy Nights week you&apos;re on, so just do your best and let me know if/where you get stuck. Lookup tables like this are going to be your main way of storing values for various things, so you should definitely learn how to do it. It&apos;s very similar to how your background loading code works. You&apos;re just additioanlly keeping a variable that stores where in the lookup table you are at all times, even when the button is not pressed.</div>
<br>
<br>
Very cool for you to reply with this info bud, much appreciated! But I must&apos;ve read this about 5 times today and I&apos;m still having a little difficulty with the lookup table piece. Storing values makes sense, but I don&apos;t know how to store them and retrieve them because they are values that have no location in memory... or do I just pick something in the 2K RAM? Even so, I&apos;d need a little push / example on initializing the constants like this for a lookup table. If I knew how to do that, then I could store / retrieve them like any other constant variable.&#xA0;<br>
<br>
I think I&apos;ll start working on what I know how to do...making more tiles, haha. I think 16 is enough, 8 won&apos;t cut it, as you only get one diagonal between each cardinal direction, and I don&apos;t want to waste a lot of tiles (I&apos;m using NROM / mapper 0 so I only have 256) for the sprites.&#xA0; I&apos;ll work on that, once its done (hopefully by tomorrow) I&apos;ll let ya know where I get stuck on the table lookup initialization stuff.&#xA0;<br>
<br>
thanks!<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>