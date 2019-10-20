<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Jan 4, 2015 at 1:33:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The NES ROMs with the *.nes extension isn&apos;t something that is related to the hardware. It is a (sort of propietary) format of an old emulator called iNES, hence this is the iNES format that was adopted by all emulators since then. The format itself is very simple, it is one or two binary files, contents of the PRG ROM and CHR ROM (if present) respectively, along with a 16-byte header that tells an emulator how to interpret this data and which hardware options the game uses. To make an iNES format ROM from these binary files, you need to glue them together and add the header with proper information. You don&apos;t need an assembler to do it, just a HEX editor, or one of the ROM split tools that also supports a backwards operation.
				</div><div class="mdl-card--border"></div>