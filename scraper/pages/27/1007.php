<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Feb 23, 2018 at 7:28:41 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
It seems so random. My first thought was are you trying to do too much during your NMI? Without seeing the code, I can&apos;t really tell what&apos;s all happening during NMI.<br>
<br>
Hopefully someone will have a better answer, but I think that may a good first check. I haven&apos;t really dealt much with scrolling with BG Compression.</div>
Thank you.&#xA0; I guess my question then since this is the first time I&apos;m really having to understand NMI, is The act of writing to the PPU what takes a long time or is it just too much going on?&#xA0; When I go to decompress the meta-tiles in a column, I set the rightmost tiles of the meta-tile (1 &amp; 3) to the PPU and put the other 2 in a buffer for the next time I need a new column to be drawn.&#xA0; This continues&#xA0;30 times to get the entire meta-tile column (essentially&#xA0;2 screen columns) So would the act of writing the tile numbers to a buffer, adding an extra 30 writes, but not to the PPU, be extending this process too long?&#xA0; You can tell from the previous video, that there isn&apos;t a whole lot going on, and I believe I have separated&#xA0;my game logic outside of the NMI routine.&#xA0; I don&apos;t&#xA0;recall how much one can do inside of NMI, but I feel as though this isn&apos;t too much, then again I don&apos;t&#xA0;really know what I&apos;m&#xA0;talking about when it comes to NMI lol.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>