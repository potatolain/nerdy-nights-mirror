<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				Apr 22, 2014 at 5:27:16 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You were trying to reach a 16-bit address with the table you had setup with .word. NES uses something called little endian (just Google that), and the +1 is the high byte of the address, whereas the +0 is the low byte. The only 8-bit addresses you&apos;ll be messing with are zeropage : ). But yeah, maybe just look up little endian 6502 or something. It should make sense. Ask questions if not!
				</div><div class="mdl-card--border"></div>