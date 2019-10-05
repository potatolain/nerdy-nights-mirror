<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Dec 29, 2011 at 7:42:01 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					02: It&apos;s good practice to initialize everything to a known state in the beginning of the program.
<br>03: Technically this isn&apos;t required on the NES CPU, but it&apos;s still a good practice to have it.
<br>04-05: $4017 is connected to the APU when it&apos;s being written. I won&apos;t go into details about $40, but long story short it sets on bit in the APU register 4017 that makes sure frame IRQs won&apos;t happen
<br>06-07: $FF (the actual memory location is $1FF) is actually the first location, because stack grows from top ($1FF) to bottom ($100). So when a value gets pushed, the stack pointer gets decreased.
<br>08: That&apos;s right.
<br>11: Once again, it&apos;s good practice to initialize everything to a known state, even though IRQs won&apos;t be actually triggered regardless because of the SEI instruction on line 2.
<br>12-14: vblankwait1 is a label, BIT $2002 (in this case) copies the top bit of value read from $2002 to CPU&apos;s sign flag (plus/minus). This happens to be the bit that indicates whether vblank has started. BPL vblankwait1 jumps back to the label if the result is positive, in other words if the top bit of the value read from $2002 was 0.
				</div><div class="mdl-card--border"></div>