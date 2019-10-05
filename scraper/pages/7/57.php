<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jan 23, 2012 at 1:53:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					If you have problems you needed answered in depth you can mail me, but yes the logic is in the NMI and that isn&apos;t always terrible. But once you try to put different &quot;engines&quot; in programs, you&apos;ll need different NMI&apos;s to handle stuff, so some programs (All of mine, many others) just do something like this:
<br>
<br>NMI:
<br>BIT $2002 ;Tell PPU you acknowledged the NMI
<br>INC Frame ;Just a frame counter variable to tell the rest of the computer it&apos;s a new frame.
<br>RTI ;Return, hopefully the program was already waiting for the NMI to happen so it won&apos;t slow down.
<br>
<br>And then in their programs, they just do a JSR WaitForNMI that waits for the Frame variable to be change, and when changed, then runs some logic after the JSR to the vblank wait. One bad thing is that if your calculations spill over your music will also slow down by half too, which isn&apos;t that good, but the method is still the simplest to use in the long run.
				</div><div class="mdl-card--border"></div>