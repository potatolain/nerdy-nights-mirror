<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Feb 16, 2012 at 12:16:41 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I know you&apos;ve been through these (As stated on NESDev) but maybe you should look into making subroutines that upload 1KB of data to the PPU, especially before trying to implant a hack to make it work in a project right now. You don&apos;t have to stop writing to the nametable for the attributes or anything. You just have to make sure no NMI&apos;s happen and then make sure rendering is disabled to upload a whole nametable, that&apos;s it. Use the tool NESst to make nametables wth your graphics, and then save it as a .BIN file with attributes, then upload that. I&apos;d advise doing that in another project just to get a better idea of how to do it.
				</div><div class="mdl-card--border"></div>