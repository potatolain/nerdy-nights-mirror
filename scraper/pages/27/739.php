<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Feb 10, 2016 at 2:37:41 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					There are basically two ways you can do this:
<br>
<br>1) You can do what you said: read the byte from attribute table, modify it, then write it back. Note that your current code won&apos;t work as is, because you need to do one dummy read from $2007 after setting the PPU address to fill PPU&apos;s internal data buffer.
<br>
<br>OR:
<br>
<br>2) You can keep a copy of the attribute table (64 bytes) in CPU RAM. Then you just need to make sure to update both copies every time you make changes to the attributes.
				</div><div class="mdl-card--border"></div>