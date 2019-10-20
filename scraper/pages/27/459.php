<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 18, 2014 at 4:32:22 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					That code is just a directive to your assembler to insert the graphics.chr binary into final output at certain place, where emulator expect to see CHR ROM data. If you were making a cartridge out of this file, you would need to separate the CHR part, and burn it into a separate ROM chip, which would became CHR ROM.
<br>
<br>Pattern tables are located in CHR memory, either CHR ROM (preprogrammed) or CHR RAM (programmable). So you can say they are the CHR ROM or CHR RAM. You load the graphics into the CHR RAM by using $2006/7, so it become your pattern tables.
<br>
<br>Honestly, you just really need to learn the basics first, like NES and cartridge architecture, the idea of separate CPU/PPU address spaces, NES memory map.
				</div><div class="mdl-card--border"></div>