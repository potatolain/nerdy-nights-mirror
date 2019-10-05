<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Oct 17, 2012 at 12:43:41 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					No, this is not like C where you have to TELL the preprocessor that a function will come up sometime later in the program and what type and what variables it needs. I reread it and that makes sense what you&apos;re asking now. But yes, if you use hardcoded values and not labels, then yes you need to make sure the ROM data at $E000 is the palette. If you use labels though, it keeps &quot;track&quot; of everything for you and you don&apos;t need to do anything. And technically it&apos;s &quot;storing&quot; the values, but it&apos;s not doing it before hand. ROM is programmed with that data, it just puts it there. And you can access any part of the ROM (In the 32KB range) at any time, but yeah in that program it uses it. But if you&apos;re talking about $3F00 for the palette, that&apos;s on the PPU.
				</div><div class="mdl-card--border"></div>