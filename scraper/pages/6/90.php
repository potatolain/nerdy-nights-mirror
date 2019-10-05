<div class="mdl-card__title"><strong>y(oYo)</strong> posted on 
		
			
				
				Jul 26, 2013 at 8:01:11 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hello!
<br>
<br>After carefuly reading all this topic&apos;s posts, there is still one thing that confuses me.
<br>I understood that one attribute byte rules a 32*32 pixels square (i.e. 4*4 tiles).
<br>The screen is 32 tiles width, so 256 pixels, which is a multiple of 32 and is fine.
<br>The screen is 30 tiles height, so 240 pixels, which is not a 32 multiple.
<br>So the last 8 bytes of the attribute table would have a part of them that are useless?
<br>
<br>For instance, if my last 8 attributes bytes are :
<br>  .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000
<br>
<br>Can you confirm those represented by &quot;X&quot; could take either 0 or 1 without consequence ?
<br>  .db %XXXX0000, %XXXX0000, %XXXX0000, %XXXX0000, %XXXX0000, %XXXX0000, %XXXX0000, %XXXX0000
				</div><div class="mdl-card--border"></div>