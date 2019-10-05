<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Feb 16, 2013 at 11:48:01 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The data is loaded through the PPU $2007 register after wiriting $3f00 to PPUAddr because the data goes to the PPU, The CPU doesn&apos;t access the pallet RAM directly, it does it through the PPU. But the LDA palette,X loads the data from the array pointed to by the pallet label. Then, the STA $2007 store it to the PPU with then puts it to the area that the PPUAddr ($2006 register) points to.
				</div><div class="mdl-card--border"></div>