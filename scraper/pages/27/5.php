<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				May 16, 2013 at 2:16:32 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Program before assembling is a text (source code), usually there are many text files with the code, along with files with various binary data, such as graphics sets, music, etc.
<br>
<br>Average length is difficult to say, and it depends from programming language, and data storage approach - sometimes part of it is stored as binary, sometimes it is encoded in the source code, various amounts. Anyway, no less than thousand(s), even a simple one-screen logic game could be like 5000 lines of assembly code or 1500-2000 lines of C code.
<br>
<br>Some structure is suggested by the hardware design, i.e. there is main loop and NMI handler. Any access to the VRAM needs to be done during vertical blanking, so it is usually put into the NMI handler. Other than this, structure could be different. Say, you sure that you game won&apos;t run longer than a TV frame per in-game frame, so you can put it into the NMI handler entirely. Or you put part of the code (v-blank related, music player) into the NMI handler, but the rest of the code into the main loop. Or, you can do slow calculations in the main loop, while user interaction is done in the NMI handler - this could be useful in logic games, where the game code needs quite some time, but user could move the cursor around any time he wants.
<br>
<br>There are imperfections in the NES emulators, so yes, you can make a game that runs in an emulator, but not on the hardware, or vice versa. Speed-wise, normally there is no difference. So testing the program on the real hardware is a good idea, although with certain experience it is possible to make programs that will work on the hardware having no hardware, using knowledge of possible pitfalls and many emulators to testing.
<br>
<br>Gameboy is not different from any other computing platform, you can program it as well. The hardware is different from the NES, though.
				</div><div class="mdl-card--border"></div>