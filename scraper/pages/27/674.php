<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Sep 19, 2015 at 6:17:36 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Shiru</b></i><br>
<br>
There is two 256-tile pattern tables accessible by PPU, one at $0000, other at $1000 in the PPU address space. Each table can be selected to be used for BG or sprites (8x16 sprites can use both tables) using bits 3 and 4 of the $2000 (PPUCTRL). To make MMC3 IRQs work, you should use one of the tables only for BG, and other only for sprites. Say, if you assign $0000 table both to BG and sprites, it won&apos;t work; if you use 8x16 sprites to use tiles from the table assigned to the BG, it won&apos;t work.</div>
<br>
Turns out it didn&apos;t behave correctly because my game used 8x16 sprites. However this leaves me in a tricky situation, since I need 8x16 sprites for my game... Is there a way to fix this without having to drop the 8x16 sprites or to use a sprite zero hit?<br>
<br>
EDIT: I just put my sprites on the other pattern table, it was as easy as that <span class="sprites_emoticons absmiddle" id="emo_tongue"></span> Thanks for the help, much appreciated.
				</div><div class="mdl-card--border"></div>