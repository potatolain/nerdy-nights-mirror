<div class="mdl-card__title"><strong>dougeff</strong> posted on 
		
			
				
				Jan 19, 2016 at 7:10:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I think you mean the 4 bit ...0000 0100, the interrupt flag.
<br>
<br>Which turns off IRQ interrupts, but not NMI interrupts. To turn off NMIs you have to reset the high bit of the $2000 Register to zero, which can be done during NMI, if your NMI routine runs too long, to prevent a second NMI to trigger while still in NMI.<br><br>(Note, the preferred method of turning on/off IRQ interrupts is with CLI and SEI commands.)
				</div><div class="mdl-card--border"></div>