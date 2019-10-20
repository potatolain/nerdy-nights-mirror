<div class="mdl-card__title"><strong>insomniakc</strong> posted on 
		
			
				
				Jan 19, 2016 at 3:17:14 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hey everyone!. Mega Mario Man and I have been chatting about 6502, and I just thought I would put a question out there about the status flag.<br>
<br>
In 6502: Assembly Language Programming by Lance A. Levanthal he recommends a trick to bypass RTI by pulling the flag register from the stack, toggling bit two, and pushing it back.<br>
<br>
The code is simple:<br>
<br>
PLA ;01FF (flag register) pulled from stack<br>
ORA #%00000010 ; toggle bit 2<br>
PHA ;push<br>
<br>
<br>
I started thinking, is there any practical application for this 6502 programming trick on the NES? Basically what it does is prevent an RTI from being called, from what I understand.<br>
<br>
I got to thinking about this because my NMI routine in the program I&apos;m working on got too bloated, and never reached the RTI, so I simply had to cram into my brain everything I could find about the flag register, the stack, and the NMI to try to figure out a strategy to debug this similar problem in the future.<br>
<br>
P.S.: Thanks MRN for all the great tutorials, I&apos;ve been lurking them for a long time now.<br>
<br>
Edit: When I say bypass RTI it&apos;s a bit of an oversimplification. It causes the RTI to return to the main program with interrupts disabled, whereas RTI normally re-enables that flag. So it bypasses all future Interrupts, only bypassing the flag modification that RTI does.
				</div><div class="mdl-card--border"></div>