<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jun 15, 2015 at 11:07:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>user</b></i><br>
	<br>
	<img align alt border="0" hspace="4" src="images/missing/C5B57052-BFC7-FB05-61EB4A04DA59BE9E.png" vspace="4" original-src="http://nintendoagemedia.com/users/21264/photobucket/C5B57052-BFC7-FB05-61EB4A04DA59BE9E.png"><br>
	<br>
	So, the scanline &quot;hits&quot; 9 sprites, but doesn&apos;t render any pixel from the first one (since they are all transparent on that scanline): in such scenario the 9th sprite pixels on that scanline will be rendered or not?</div>
They will not be rendered. Whether the sprite has visible pixels on the specific scanline has no bearing on the sprite limitation.<br>
<br>
What happens in the PPU is that for each scanline that is being processed, it looks through the 64 sprites, and compares their Y coordinates to see if they should be rendered on the current scanline. If the Y coordinate matches, the sprite is added to the list of sprites for the current scanline, which can only fit a maximum of 8 sprites (after the list is full, the rest of the sprites are discarded). Since the sprites are scanned starting from index 0 up to index 63, the sprites with the lower index get higher priority for rendering.
				</div><div class="mdl-card--border"></div>