<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jan 27, 2015 at 5:22:06 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
Which sprite will be in front, and which one will be hidden behind the other?<br>
i.e. would you see a red sprite or a blue sprite?</div>
The sprite with the lower index has priority, so if both sprites have a non transparent pixel in the same spot then the sprite 0 pixel is drawn and sprite 1 is not. &#xA0;<a href="http://wiki.nesdev.com/w/index.php/PPU_sprite_priority" target="_blank">http://wiki.nesdev.com/w/index.ph...</a><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
<span style="line-height: 1.6;">Also, I know about the fact that sprites can be in front or behind the background, but I can&apos;t remember where you set this option (I always had sprites in front and backgrounds behind so far in my games).</span></div>
<br>
Priority bit in the sprite attributes:&#xA0;<a href="http://wiki.nesdev.com/w/index.php/PPU_OAM" target="_blank">http://wiki.nesdev.com/w/index.ph...</a><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
Also, if you set a further color (fi. the second color of a specific subpalette) identical to the transparency color (ie. the first color of that specific subpalette), will that color be drawn, or will it be transparent?<br>
<br>
Let say you set the sprites in front of the background, have a background &quot;black red red red&quot; and the whole background area fully filled with a &quot;solid&quot; red background, and you set &quot;black black yellow green&quot; in a sprite subpalette: the area which use the second color of that sprite will be drawn black above the red &quot;solid&quot; background or not?</div>
A transparent sprite pixel does not get drawn. &#xA0;But a pixel using the same color index (black) not in the transparent slot (first slot) will get drawn. &#xA0;So in your example if the sprite uses the first black (transparent) the picture will be red (background), and if it uses the second black (actually black) the picture will be black (sprite). &#xA0;This should probably have a cool sample image here... &#xA0;The slot is the important part, not the color itself. &#xA0;Hope that makes sense in English too &#xA0;<span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>