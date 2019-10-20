<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Dec 28, 2014 at 11:48:32 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					If you&apos;re using RLE background compression for a two screen game which can scroll back and forth depending on the positioning of the player sprite, how is background collision handled?
<br>
<br>I am basically decompressing the first screen to RAM in $0400-$0700, but there obviously isn&apos;t enough room to decompress a second nametable.  I can&apos;t think of a way to load the middle values of RLE compressed collision data depending on what the scroll value is.  How is this usually handled?
				</div><div class="mdl-card--border"></div>