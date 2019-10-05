<div class="mdl-card__title"><strong>Memblers</strong> posted on 
		
			
				
				Jun 21, 2011 at 4:19:19 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Berserker</b></i><br><br>Sorry to bump a rather old thread but...<br><br>How do I get the sprite to:<br><br>A. Move faster. (Doesn&apos;t necessarily need to be variable, but I may be doing it wrong or there may be a better way. Code only changed for Dpad_Right)<br>B. Move more smoothly.<br>C. Move more accurately to the button press.<br><br>Thanks.<br></div><br><br>A/B:&#xA0; You&apos;ll use what is known as fixed-point addition (also using it like this it&apos;s often called &quot;sub-pixel precision&quot;.&#xA0; That just means there is a decimal point, and it&apos;s fixed to a certain position.&#xA0;&#xA0;&#xA0; The easy way is to make your speed use 2 bytes, instead of adding #1 per pixel to your sprite position, you do a 16-bit add and use the upper 8 bits as the actual sprite position (so your sprite position must be 16-bit as well, with the lower 8-bits as it&apos;s own variable, completely separate from NES sprite-memory).&#xA0; So the &quot;decimal point&quot; is between those 2 bytes, giving you 256 fractional speeds (and by preserving the lower 8 bits of the sprite position, you&apos;ll have 256 fractional positions within each pixel on the screen).&#xA0; That allows for really smooth movement, and all kinds of different speed possibilities.&#xA0; Also makes it easy to adjust for NTSC/PAL differences.<br>
				</div><div class="mdl-card--border"></div>