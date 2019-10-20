<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Aug 30, 2017 at 11:28:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Found something weird in NESASM3 today.  Building on my explanation of how to use a byte for flags and how to set bits of that byte to 1 and 0, I have been progressing nicely.  Thanks to all that helped!  But when I set bit 1 of my variable to 1 (from $%00000000 to #%00000010) it was locking up the emulator.  Now it took me a really long time to figure out what was going on.  I thought it was some stupid coding mistake but when I kept the bit at zero but flipped my logic to do what it should do when it was 1 the logic worked fine.  I moved my variable down a couple of lines to become the last variable declared because I know that when we declare variables they get put at addresses and the address increases as we go down the program.  Doing this make the program to behave correctly and no longer locked up the emulator. Does this mean that this variable was taking up an address that it shouldn&apos;t have been or something?  Just wondering for future development.
				</div><div class="mdl-card--border"></div>