<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Dec 29, 2014 at 4:31:31 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>KHAN Games</b></i><br>
	<br>
	If you&apos;re using RLE background compression for a two screen game which can scroll back and forth depending on the positioning of the player sprite, how is background collision handled?<br>
	<br>
	I am basically decompressing the first screen to RAM in $0400-$0700, but there obviously isn&apos;t enough room to decompress a second nametable. I can&apos;t think of a way to load the middle values of RLE compressed collision data depending on what the scroll value is. How is this usually handled?</div>
Whaaa, one screen $300 bytes in RAM? You can fit collision maps for 3 screens in there if you use 16*16 meta-tiles.<br>
I don&apos;t think RLE is used with scrolling. Don&apos;t you encode the collision data in the meta-tile definitions? Do you actually have separate collision maps stored in ROM?<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>