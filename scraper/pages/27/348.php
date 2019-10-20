<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jun 7, 2014 at 5:05:07 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>user</b></i><br>
	<ol>
		<li>
			There is only one thing I still wonder about: all SPRITES are positioned EXACTLY 1PX BELOW (on the Y AXIS) where expected: it is a BUG, or it is just the way Nes position sprites? If a sprite has vertX=$00 horzY=$00, it should be exactly on the top-left corner (in PAL viewing) or 1 pixel below that?</li>
	</ol>
</div>
This is just the way NES PPU works. If you use y-coordinate &quot;0&quot;, the sprite will start from the 2nd scanline from top. So you can&apos;t place sprites on the very first scanline.
				</div><div class="mdl-card--border"></div>