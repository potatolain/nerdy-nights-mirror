<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 30, 2014 at 2:14:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>user</b></i><br>
	<br>
	@Mega Mario Man<br>
	<br>
	Thanks. Really clear answer. Appreciated.<br>
	<br>
	Yes, I knew c0 was for pseudo-transparency.<br>
	<br>
	Going forwards with my question, if you get time:<br>
	<br>
	<a href="http://www.spriters-resource.com/fullview/29821/" target="_blank">http://www.spriters-resource.com/fullview/29821/</a><br>
	<br>
	look at the flying dragon about the center of the image: black + 2 shades + horns + wings = 5 colors<br>
	<br>
	Or course is made by several sprites (80x80px), but they really used a second sub palette just to add a single color to it? By the way, in this case black is the color of the transparency (the background is always black in battles _iirc_), or you think there is another transparent color around the picture, which increases to total to 6?<br>
	<br>
	Those are the heroes, which all use 2 specific palette if I understand it right:<br>
	<br>
	<a href="http://www.spriters-resource.com/nes/ff2/sheet/29842/" target="_blank">http://www.spriters-resource.com/nes/ff2/sheet/29842/</a><br>
	<br>
	- BLACK, RED, PINK, WHITE<br>
	- BLACK, BLUE, YELLOW, BROWN<br>
	<br>
	In this case, black is the transparency, correct?<br>
	<br>
	If so, all four palette are used to draw the four heroes and that enemy in the battle screen.<br>
	<br>
	And anything else, must fit one of those 4 subsets combinations.<br>
	<br>
	If not, how did they do it? (I know those guys from SQUARE were genius).<br>
	<br>
	Citation: &quot;I don&apos;t know if this helps, but you can change the colors in the palette anytime during the game.&quot;<br>
	<br>
	This is possible in the same screen refresh or only between two different screen refresh?<br>
	<br>
	I hope all this is understandable.<br>
	<br>
	Thanks again!<br>
	<br>
	- user<br>
	<br>
	edit: mispelling corrections</div>
<strong>Or course is made by several sprites (80x80px),</strong><br>
One issue I can see is that if you build the dragon at 80x80 pixels, it will flicker. This would make the dragon 10 Sprites x 10 Sprites big. NES sprites are 8x8 pixels and you can only have 8 sprites in one scan line, so that would be a 64 pixel limit for all sprites on the screen per scan line.<br>
<br>
<strong>but they really used a second sub palette just to add a single color to it?</strong><br>
Well, a sprite is only 8px X 8px, so they could have built the dragon in a way that each 8x8 px area only uses 3 colors. It looks like that is possible. The wings could be Subset A and the body could be Subset B. This would be my guess.<br>
Black is probably the transparent color if most of the background is black. It doesn&apos;t really matter for sprites what the transparent color is because it is transparent, all background colors show through pixels with c0 in a sprite.<br>
<br>
<strong>- BLACK, RED, PINK, WHITE<br>
- BLACK, BLUE, YELLOW, BROWN<br>
<br>
In this case, black is the transparency, correct?</strong><br>
I would say yes, but couldn&apos;t tell you for sure without seeing their code.<br>
<br>
<strong>If so, all four palette are used to draw the four heroes and that enemy in the battle screen.<br>
And anything else, must fit one of those 4 subsets combinations.<br>
If not, how did they do it? (I know those guys from SQUARE were genius).</strong><br>
I would say you nailed it, all 4 are used. Remember, since we can change the palette during the game, each new screen loaded probably has it&apos;s own color palette. The game I am making does this and I think it is very common to switch color palettes with screen changes. But, every sprite on that screen is limited to those 4 subsets only.<br>
<br>
<strong>Citation: &quot;I don&apos;t know if this helps, but you can change the colors in the palette anytime during the game.&quot;<br>
This is possible in the same screen refresh or only between two different screen refresh?</strong><br>
Either. However, when you change the color in the palette, all sprites using that color will change. So, the hero and the dragon both use c1 as blue and you change it to yellow during the battle, all pixels using c1 will change to yellow in all sprites.<br>
You can see this happening in games that have flashing graphics (think mega man when you hold the Fire button down to make a giant bullet) or games that do a fade-to-black during cut scenes. What is really happening is that the color palette is being changed in real time.<br>
<br>
Hope this helps.<br>
				</div><div class="mdl-card--border"></div>