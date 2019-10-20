<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Feb 11, 2016 at 4:36:22 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>thefox</b></i><br>
<br>
There are basically two ways you can do this:<br>
<br>
1) You can do what you said: read the byte from attribute table, modify it, then write it back. Note that your current code won&apos;t work as is, because you need to do one dummy read from $2007 after setting the PPU address to fill PPU&apos;s internal data buffer.<br>
<br>
OR:<br>
<br>
2) You can keep a copy of the attribute table (64 bytes) in CPU RAM. Then you just need to make sure to update both copies every time you make changes to the attributes.</div>
<br>
Thanks for the tips. Got this working by keeping a working copy of Attributes in RAM at $0400. Then, I just pull out the 1 byte I need manipulate it, copy back to the proper spot in RAM and finally update the Attribute table.<br>
&#xA0;
				</div><div class="mdl-card--border"></div>