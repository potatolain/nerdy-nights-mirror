<div class="mdl-card__title"><strong>rizz</strong> posted on 
		
			
				
				Feb 18, 2010 at 1:02:08 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m trying to write code for the MMC3 mapper, and somewhere I&apos;m getting it wrong.  Do any of these stand out:
<br>1) I&apos;m using asm6 and inside the header I&apos;m telling it 8 PRG banks, with %01000011 as control byte 1
<br>
<br>2) My code for setting up the banks is basically:
<br>.base $8000
<br>.include &quot;firstbank8000.asm&quot;
<br>.pad $A000
<br>
<br>.base $8000
<br>.include &quot;secondbank8000.asm&quot;
<br>.pad $A000
<br>etc.
<br>
<br>at the end, I have
<br>.base $E000
<br>;code for interrupt vectors
<br>.pad $FFFA
<br>
<br>.dw NMI
<br>.dw RESET
<br>.dw 0
<br>
<br>.incbin &quot;graphics.chr&quot;
<br>
<br>3) Something I noticed - when I assemble and run the .nes file, I&apos;ll get a gray screen, and when I open up the debugger there is nothing in the $FFFA-FFFF (UNDEFINED).  Does that mean the RESET: code didn&apos;t run, or does it mean that the RESET label was never added to FFFC-FFFD in the first place?
<br>
<br>4) How do bank numbers work with MMC3?  Is there some sort of internal counter that increments every time I use a .base $8000 or .base $A000 (.base in place of .bank, since I&apos;m using asm6)?  I&apos;m trying to learn how the program understands my write to $8001 to do the bank switch, especially when I don&apos;t have statements such as &quot;.bank 2.&quot;
				</div><div class="mdl-card--border"></div>