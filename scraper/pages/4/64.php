<div class="mdl-card__title"><strong>spoonybard</strong> posted on 
		
			
				
				Aug 8, 2014 at 4:48:10 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m confused. If I understand what you&apos;re saying, since we wrote $00 at $2003, the data sent by DMA will be stored at address $00 in the PPU RAM. In total we have copied 256 bytes from address $200 (CPU side) to address $00 (PPU side). But I thought this range ($00 - $FF) in the PPU memory was the pattern table #0 for the sprites : the bytes that represent the 8x8 tiles for the sprites. But if I follow the code, we are sending the 4 bytes for a sprite (we are in fact sending 256 bytes of data but the 252 other ones are zeros) describing the position on the X (byte 3) and Y (byte 0) axes, the tile index number (byte 1) and the attributes (byte 2).<br>
<br>
I found in the link below<br>
<br>
<a href="http://badderhacksnet.ipage.com/badderhacks/index.php?option=com_content&amp;view=article&amp;id=270:the-nes-picture-processing-unit-ppu&amp;catid=14" target="_blank" original-href="http://badderhacksnet.ipage.com/badderhacks/index.php?option=com_content&amp;view=article&amp;id=270:the-nes-picture-processing-unit-ppu&amp;catid=14">http://badderhacksnet.ipage.com/badderhacks/index.php?option...</a> <br>
<br>
,in the section&#xA0;<strong "color: rgb(255, 255, 255); font-family: helvetica, arial, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(0, 0, 0);">II) Pattern Tables $[0000-1FFF]</strong>, that this is the starting memory region for sprite patterns (followed by the background patterns). The range $0000 - $0FFF is said to be for the sprite tiles but the autor does not mention the 4 bytes that describe the [X,Y] position, the tile number and the attributes. She/he explains the graphical interpretation of 2 bytes to form a sprite/background 8x8 pixels tile, but not the organization of the memory in this region.<br>
<br>
The first 256 bytes starting from $00 to $FF (the ones we sent using DMA) are then followed by 64 * 2 = 128 bytes of sprite pattern tiles ?
				</div><div class="mdl-card--border"></div>