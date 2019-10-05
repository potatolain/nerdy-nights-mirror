<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Oct 28, 2009 at 12:45:32 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<p>Whenever you copy some data from one place to another, by definition you have a source and a destination.&#xA0; In this case, your source is somewhere in ROM and your destination is the PPU (VRAM).&#xA0; Writes to $2006 will set your destination address, and then you write to the destination with sta $2007.&#xA0; The PPU takes care of incrementing the addresses for you, so you don&apos;t have to do anything.</p><p>The source is where you are having some problems.&#xA0; First, all addresses are 16-bit, which is why we need two variables (1 byte each) to represent one address.&#xA0; The 6502 is little endian, so addresses need to be stored low-byte first (high-byte last).&#xA0; So when we make a pointer variable in RAM, the low byte needs to come first, hence the order:</p><p>AddrLow .rs 1</p><p>AddrHigh .rs 1</p><p>Now as you suspected, the magic is in the brackets [].&#xA0; Putting brackets around a variable Z translates to &quot;the address located at Z and Z+1&quot;.&#xA0; So when we have an instruction like this:</p><p>lda [AddrLow], y</p><p>it translates into English as &quot;Go to the address stored in AddrLow and AddrLow+1.&#xA0; Add y to that address.&#xA0; Read the byte located there and stick it in the Accumulator.&quot;</p><p>If you look at our variable declarations above, you will see that AddrLow+1 is none other than AddrHigh.&#xA0; So in our case, the instruction translates to &quot;Go to the address stored in AddrLow and AddrHigh.&#xA0; Add y to that address.&#xA0; Read the byte located there and stick it in the Accumulator.&quot;</p><p>This is the piece you were missing I think.&#xA0; We only put one variable (AddrLow) in the brackets, but the 6502 extrapolates that to two variables (AddrLow and AddrHigh) and makes a 16-bit address out of them.<br></p>
				</div><div class="mdl-card--border"></div>