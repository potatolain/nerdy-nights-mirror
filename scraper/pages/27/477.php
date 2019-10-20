<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Jan 7, 2015 at 8:45:55 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br><div class="FTQUOTE"><i>Originally posted by: <b>KHAN Games</b></i><br>
<br>
If you&apos;re using RLE background compression for a two screen game which can scroll back and forth depending on the positioning of the player sprite, how is background collision handled?<br>
<br>
I am basically decompressing the first screen to RAM in $0400-$0700, but there obviously isn&apos;t enough room to decompress a second nametable. I can&apos;t think of a way to load the middle values of RLE compressed collision data depending on what the scroll value is. How is this usually handled?</div>
Pull the tile information from the background. &#xA0;<br>
<br>
i.e. Rather than STA $2007, use LDA $2007.<br>
&#xA0;</div><br><br><br>
This is definitely doable, but can&apos;t you update the collision RAM as the screen is scrolling? Also, I use metatiles for that stuff in one of my games and I have more than enough room in the RAM. 
Moreover, that game uses a status bar, which reduces the amount of RAM needed.
				</div><div class="mdl-card--border"></div>