<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Dec 29, 2011 at 5:45:22 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hello, I&apos;m trying to get into assembly programming through NES development,<br>
but I have some trouble understanding some stuff from your attached code. Please help me,<br>
I really want to understand this before moving on.<br><br><br><br>01. RESET:<br>
02.   SEI          ; disable IRQs<br>
03.   CLD          ; disable decimal mode<br>
04.   LDX #$40<br>
05.   STX $4017    ; disable APU frame IRQ<br>
06.   LDX #$FF<br>
07.   TXS          ; Set up stack<br>
08.   INX          ; now X = 0<br>
09.   STX $2000    ; disable NMI<br>
10.   STX $2001    ; disable rendering<br>
11.   STX $4010    ; disable DMC IRQs<br>
12. vblankwait1:       ; First wait for vblank to make sure PPU is ready<br>
13.   BIT $2002<br>
14.   BPL vblankwait1<br><br><br><br>Line 02       - IRQ&apos;s have to be disabled if not used, but why?<br>
Line 03       - Decimal mode not supported by the 2A03<br>
Line 04.05    - Aren&apos;t address $4017 controller 2? How is that connected to the APU? What is so special<br>
                about the number $40?<br><br>
Line 06.07    - $FF last memory location in stack, initialize stack to this value.<br>
Line 08       - Increment $FF so it overflows and becomes 0.<br>
Line 09.10.11 - Set all bits in address $2000, $2001 and $4010 to 0. The first two I understand<br>
                but what is a DMC IRQ, and why does it need to be disabled?<br><br>
Line 12.13.14 - I know the PPU have to warm up before using it, but what exactly do these lines of code do?<br><br><br><br>Please someone, look through this and correct me where I&apos;m wrong,<br>
and help me understand this code. I&apos;m new to the field of computer science,<br>
but I got a book coming in the mail any day now that will introduce me to<br>
boolean algebra and stuff like that, which, if I understand it correctly,<br>
is essential to NES dev and ASM programming in general.<br>
Sorry for the long post.
				</div><div class="mdl-card--border"></div>