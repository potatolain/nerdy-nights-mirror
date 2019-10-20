<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 17, 2014 at 3:52:41 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					MadnessVX, I&apos;m not sure if there are write ups on the ca65 for NES, I actually figured out how the linker config works by examining existing configs and reading the docs. I think it is a good idea to just get existing config and experiment with changing it a bit. There should be templates for a few popular mappers somewhere on NesDev.
<br>
<br>Baka94, no, you can&apos;t have CHR ROM and CHR RAM at the same time (not in any of existing configs, at least). The whole point of having CHR RAM is to get rid of CHR ROM, and use PRG ROM to store (compressed) graphics instead. Also, don&apos;t mess up CHR RAM with the Save RAM (WRAM, PRG RAM), these are two different things.
				</div><div class="mdl-card--border"></div>