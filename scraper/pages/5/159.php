<div class="mdl-card__title"><strong>think1st</strong> posted on 
		
			
				
				Dec 29, 2017 at 1:49:24 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi, first post here. 
<br>
<br>Can you store things in CPU ram using .org and .db directives? Like placing the sprite data directly in ram.
<br>
<br>.org $0200
<br>.db #128,#0,#0,#128
<br>.db #128,#1,#0,#136 
<br>
<br>etc.?
<br>
<br>On that note, I notice I&apos;m a bit confused how the assemblers decides where to put stuff in memory when you use .org. Is the address you hand to .org relative to the current .bank you&apos;re working on? Otherwise, the way mario.chr is included looks like you&apos;re writing the first 8 KB of CPU memory, including mirrored sections of RAM (since the code does .org $0000 followed by include). On the other hand, the entire previous code section looks as if its absolutely addressing all of the 64kb memory space the CPU has, even though the PRG ROM is only 16kb if you specify .inesprg 1. If I understand correctly, .bank 1 should be the second 8kb memory block from PRG ROM so for example all code I would expect to be .org-ed to $2000  instead of $C000 like it is at the top of the file.
<br>
<br>Also, how does the assembler know that .bank 2 belongs to PPU memory? I guess NESDEV just knows that you&apos;re targeting NES, but how do you handle stuff like that with a more generic assembler like ca65 or asm6?
<br>
<br>Hope I&apos;m not dumping too many questions.
				</div><div class="mdl-card--border"></div>