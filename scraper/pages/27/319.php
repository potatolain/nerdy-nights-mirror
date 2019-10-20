<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 30, 2014 at 12:48:40 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>user</b></i><br>
	<br>
	Hi all,<br>
	<br>
	Sprite Palette:<br>
	<br>
	Subset A / Subset B / Subset C / Subset D<br>
	c0 c1 c2 c3 / c0 c4 c5 c6 / c0 c7 c8 c9 / c0 cA cB cC<br>
	<br>
	Total 1 (c0) + 12 colors, correct?<br>
	<br>
	Each 8x8px (or 8x16px) sprite can have only 4 colors, and one of them is c0, right?<br>
	<br>
	If so far I&apos;m correct... Quick question, simple curiosity:<br>
	<br>
	It seems no possible to have a sprite with, for example, c0 c1 c2 _c9_.<br>
	<br>
	A sprite can only get the colors in a single subset of a palette?<br>
	<br>
	It is this restriction true, or I&apos;m missing something?<br>
	<br>
	Say a sprite needs Black Red Blue Green, and another Black Red Blue Yellow, two out of four palettes are needed for only those two sprites?<br>
	<br>
	Is there a way to mix up the 4 colors of different sprites?<br>
	<br>
	I mean, for example:<br>
	<br>
	- color 00 +<br>
	- color 01 from Subset A +<br>
	- color 10 from Subset C +<br>
	- color 11 from Subset B<br>
	<br>
	Sorry if the question was already covered somewhere, I couldn&apos;t find a clear answer.<br>
	<br>
	I know my English is far from perfection, I hope this is understandable.<br>
	<br>
	Any feedback is welcome. Thanks.<br>
	<br>
	Cheers!<br>
	<br>
	- user</div>
<br>
You are correct. The sprite can only use one subset of 4 colors. You cannot mix the color from subsets.<br>
<br>
If you don&apos;t already know, c0 would be used for transpency so the background will show through, so you really only get 3 colors and a transparent color.<br>
<br>
I don&apos;t know if this helps, but you can change the colors in the palette anytime during the game.<br>
So, lets say in Subset A you have c0,c1,c2,c3 where c0=black, c1=blue, c2=red, and c3=green. At any time, you can change c1 to yellow by changing the value in the pallete (I think address $3F11 for c1). However, this means that the color of blue is now gone. I use this in my game to change the color of beer I am filling the mug with.
				</div><div class="mdl-card--border"></div>