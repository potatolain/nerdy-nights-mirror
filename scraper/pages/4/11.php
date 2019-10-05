<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Feb 12, 2010 at 5:24:55 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>rizz</b></i><br><br>Ah, so the 8 sprites per scanline even counts sprites that are turned off.
<br>
<br>So, is it necessary to read $2002 as a precaution every time you are writing addresses to the PPU registers?  Or are there only specific times?
<br>
<br>Is it best (or is it necessary) to turn off sprites &amp; background (using $2001) during all palette, sprite, and background updates?
<br>
<br>Thanks!</div><br><br>The 8 sprites per scanline does count offscreen, but it doesn&apos;t really matter since you&apos;ll never see them. You can set them all offscreen.<br>
				</div><div class="mdl-card--border"></div>