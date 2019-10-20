<div class="mdl-card__title"><strong>M-Tee</strong> posted on 
		
			
				
				Feb 17, 2015 at 12:36:08 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div>
	This is exactly why I was looking to see if there was a standard (or generally accepted as standard) terminology.</div>
<div>
	&#xA0;</div>
<div>
	In the examples listed,</div>
<div>
	&#xA0;</div>
<div>
	I used&#xA0;<em>palette&#xA0;slot</em> to refer to a 4-color(byte) section of a palette. For example, the contents of Mario&apos;s palette slot would be transparent, red, brown, and tan.<br>
	<br>
	However, in the quote user posted, bunnyboy seems to use slot to refer to an individual byte. (basically a very specific address), for example&#xA0;<em>one of Mario&apos;s slots contains red.</em><br>
	<br>
	Then, SGP seems to be using slot to refer to a byte in the background attribute data (controlling which palette is assigned to a section of the screen).<br>
	<br>
	So, it seems that my choice of the word&#xA0;<em>slot </em>was an ill-made one, as even in this post, it caused confusion.<br>
	<br>
	I guess MMM&apos;s and Roth&apos;s shorthand would be the closest to generally accepted (that seems to be the terminology used on the <a href="http://wiki.nesdev.com/w/index.php/PPU_palettes" target="_blank">nesdev wiki</a>.<br>
	<br>
	<em>Therefore, a single palette is 4 bytes long, and there are 8 palettes loaded at a time, four for sprites (SPR Pal 0&#x2013;3 and four for backgrounds (BG Pal 0&#x2013;3). Each of these 16 palettes has four colors, of which one will be transparent/background.</em><br>
	<br>
	Thanks for the input on this.&#xA0;</div>
				</div><div class="mdl-card--border"></div>