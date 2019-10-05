<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 23, 2014 at 8:11:22 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dread</b></i><br>
	<br>
	How do you know the location of each sprite. I gathered 203 from from reading the code, but I can&apos;t seem to find 207, 20b, or 20f anywhere.<br>
	<br>
	I wanted to do the &quot;homework&quot; on my own as best I could, but I had to read through the thread to figure out the location of the other three sprites. How would I locate them on my own?</div>
<br>
Sprite data starts at $0200 and the address is increased by 1 for each byte afterwards. Each sprite needs 4 bytes of data and is loaded in this order:<br>
1. Vertical Position<br>
2. Tile Number<br>
3. Sprite Attribute<br>
4. Horizontal Position<br>
<br>
If you look at the sprites section, you will see this.<br>
<br>
sprites:<br>
&#xA0;&#xA0;&#xA0;&#xA0; ;vert tile attr horiz<br>
&#xA0; .db $80, $32, $00, $80&#xA0;&#xA0; ;sprite 0<br>
&#xA0; .db $80, $33, $00, $88&#xA0;&#xA0; ;sprite 1<br>
&#xA0; .db $88, $34, $00, $80&#xA0;&#xA0; ;sprite 2<br>
&#xA0; .db $88, $35, $00, $88&#xA0;&#xA0; ;sprite 3<br>
<br>
So, the first sprite would load like this:<br>
SPRITE 0<br>
1. Vertical Position&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; =$0200<br>
2. Tile Number&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; =$0201<br>
3. Sprite Attribute&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; =$0202<br>
4. Horizontal Position&#xA0;&#xA0; =$0203<br>
<br>
After Sprite 0 loads, the sprite loading loop will continue on to the next sprite (if the loop is set for loading more sprite data). So this:<br>
<br>
&#xA0;&#xA0;&#xA0;&#xA0; ;vert tile attr horiz<br>
&#xA0; .db $80, $32, $00, $80&#xA0;&#xA0; ;sprite 0<br>
&#xA0; .db $80, $33, $00, $88&#xA0;&#xA0; ;sprite 1<br>
&#xA0; .db $88, $34, $00, $80&#xA0;&#xA0; ;sprite 2<br>
&#xA0; .db $88, $35, $00, $88&#xA0;&#xA0; ;sprite 3<br>
<br>
Will load like this:<br>
&#xA0;&#xA0;&#xA0; vert&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; tile&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; attr &#xA0;&#xA0; horiz<br>
&#xA0;$0200, $0201, $0202, $0203 &#xA0; ;sprite 0<br>
&#xA0;$0204, $0205, $0206, $0207 &#xA0; ;sprite 1<br>
&#xA0;$0208, $0209, $020A, $020B &#xA0; ;sprite 2<br>
&#xA0;$020C, $020D, $020E, $020F &#xA0; ;sprite 3<br>
				</div><div class="mdl-card--border"></div>