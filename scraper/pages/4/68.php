<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Aug 8, 2014 at 8:09:45 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>spoonybard</b></i><br>
	<br>
	Now I have a question concerning the graphic data in the PPU memory. Following the source code, I clearly see that the CPU sends the two palettes for the background and the sprites, then the sprite data by DMA into the SPR-RAM. However, I don&apos;t see the part where the pattern tables, the name tables and their attribute tables are sent to the PPU memory. Is there a directive that does this job ?</div>
In this case the program uses CHR-ROM, so it doesn&apos;t need to transfer the pattern tables to PPU, they will be visible in PPU&apos;s memory space at $0000-1FFF by default. Some other program might use CHR-RAM, in which case $0000-1FFF would be RAM and the program would have to copy the data from CPU memory to PPU memory manually with $2006 and $2007 writes.<br>
<br>
Since the program only displays sprites, it doesn&apos;t need to upload nametables (the write to $2001 only enables sprite rendering). Same goes for attribute tables, which are really just a part of the nametables. If it <em>did</em> use background rendering, it would have to upload the nametable through registers $2006 and $2007.
				</div><div class="mdl-card--border"></div>