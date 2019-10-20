<div class="mdl-card__title"><strong>doppelganger</strong> posted on 
		
			
				
				Oct 24, 2013 at 3:12:37 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I can only assume that you&apos;re working with the SNES, and referring to the SMC header.&#xA0; That header itself is not part of the ROM space and is not actually used by any emulator (that I know of).&#xA0; From what I know, emulators tend to rely on parts of the registration data inside the ROM at address space $00:$FFB0-$FFDF in order to figure out how the ROM is mapped to memory, and if any add-on chips need to be emulated.&#xA0; So yes, any headers like the SMC one need to be removed.<br>
<br>
As for the checksum, an SNES emulator may check it and the complement check to make sure the ROM contents are not corrupted as a courtesy, but this is not required in order for the ROM itself to run as long as the ROM contents are not corrupted.&#xA0; The SNES itself doesn&apos;t do anything with the checksum.
				</div><div class="mdl-card--border"></div>