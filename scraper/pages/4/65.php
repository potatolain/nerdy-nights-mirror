<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Aug 8, 2014 at 5:46:58 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>spoonybard</b></i><br>
	<br>
	I&apos;m confused. If I understand what you&apos;re saying, since we wrote $00 at $2003, the data sent by DMA will be stored at address $00 in the PPU RAM. In total we have copied 256 bytes from address $200 (CPU side) to address $00 (PPU side). But I thought this range ($00 - $FF) in the PPU memory was the pattern table #0 for the sprites : the bytes that represent the 8x8 tiles for the sprites.</div>
There&apos;s a separate 256 bytes of memory in the PPU for the sprites. This memory is completely separated from other PPU memory that is used for background/sprite tiles and nametables. The registers at $2003 and $2004 address the 256 byte sprite memory (only).
				</div><div class="mdl-card--border"></div>