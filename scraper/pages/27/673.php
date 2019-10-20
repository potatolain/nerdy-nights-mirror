<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Sep 19, 2015 at 5:56:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					There is two 256-tile pattern tables accessible by PPU, one at $0000, other at $1000 in the PPU address space. Each table can be selected to be used for BG or sprites (8x16 sprites can use both tables) using bits 3 and 4 of the $2000 (PPUCTRL). To make MMC3 IRQs work, you should use one of the tables only for BG, and other only for sprites. Say, if you assign $0000 table both to BG and sprites, it won&apos;t work; if you use 8x16 sprites to use tiles from the table assigned to the BG, it won&apos;t work.
				</div><div class="mdl-card--border"></div>