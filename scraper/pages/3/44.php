<div class="mdl-card__title"><strong>CMR</strong> posted on 
		
			
				
				Jul 9, 2011 at 7:06:11 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Sorry for the necropost, but I&apos;m having trouble understanding why the banks begin where they do.  In the sample code from the download link .bank0 starts at .org $C000, .bank1 starts at .org $FFFA, and .bank2 starts at .org $0000.  Is .org specifying where to put the code in reference to the system&apos;s memory map or the cart rom&apos;s?  $FFFA is too big a number for the 32KB cart, so I have to assume we&apos;re dealing with the CPU&apos;s memory map.  And why does .bank0 start at $C000?  Does it need to go there or did you just put it there because you wanted to?  Also, the 32KB cart rom on the memory map from week 2 doesn&apos;t include the 16KB chr rom, correct?  I&apos;m thinking the chr rom is outside the CPU&apos;s memory map and can only be accessed by the PPU.  Is that why the chr rom can start at $0000, because it isn&apos;t really a part of the CPU&apos;s memory map?
<br>
<br>Thanks for the tutorials.  Anymore help you or anyone else can give is greatly appreciated.
				</div><div class="mdl-card--border"></div>