<div class="mdl-card__title"><strong>think1st</strong> posted on 
		
			
				
				Dec 29, 2017 at 3:58:16 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I found the answer. Seems the INES file format only contains ROM data, so the answer to my first question would be a simple NO. And after some experimentation with some other assemblers I figured that out, too. The assemblers don&apos;t care what goes to the PPU and what not, they just output the raw data as you define it using .org statements. Then, when the assembled .nes file is 16 bytes (header) + 16kb (1x prg rom) + 8kb (1x chr rom), the emulator is actually responsible for realizing that the first 16kb after header is for prg rom and the 8kb after is for chr rom.
				</div><div class="mdl-card--border"></div>