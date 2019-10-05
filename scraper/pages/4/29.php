<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Feb 25, 2011 at 3:36:59 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br>3GenGames, you&apos;ve confused me. The sprite palettes are in bits 0and1, not as you&apos;ve specified above. Also. Couple other things I can&apos;t xo on my phone.</div><br><br>Sorry. I am touching on changing the palette since I thought he just asked that, but I guess he wants to assign the sprite a different palette. Since he is confused about the palette assigning, I&apos;ll try to help with that now:<div><br></div><div><br><div>
<div>Bits number 0 and 1 assign the color palette inside the attributes byte of sprite RAM in the 3rd register for sprite RAM.</div></div></div><div><br></div><div>#%00000000=Palette 0;</div><div>#%00000001=Palette 1;</div><div>#%00000010=Palette 2;</div><div>#%00000011=Palette 3;</div><div><br></div><div><br></div><div>Those values will change what palette the sprite uses. if you want any other attributes set, just set the bits you want (ORA instruction):</div><div><br></div><div><span class="Apple-style-span" style="font-family: monospace; white-space: pre; font-size: 11px; "><pre style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px; white-space: normal; "><pre>  76543210<br>  |||   ||<br>  |||   ++- Color Palette of sprite.  Choose which set of 4 from the 16 colors to use<br>  |||<br>  ||+------ Priority (0: in front of background; 1: behind background)<br>  |+------- Flip sprite horizontally<br>  +-------- Flip sprite vertically</pre><pre><br></pre><pre>Edit: fixed text width to fixed-width. Sorry for the mix up.</pre></pre></span></div>
				</div><div class="mdl-card--border"></div>