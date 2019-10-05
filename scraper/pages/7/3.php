<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				Jun 9, 2008 at 7:17:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					If you make that a subroutine where it first appears, here&apos;s what it will look like:
<br>
<br>vblankwait: ; wait for vblank
<br>BIT $2002
<br>BPL vblankwait
<br>RTS
<br>
<br>RESET:
<br>SEI ; disable IRQs
<br>CLD ; disable decimal mode
<br>
<br>See that RTS in there after the test for branch? That&apos;s the ReTurn from Subroutine(RTS) that was mentioned by bunnyboy. If you first encounter that without having a Jump to SubRoutine (JSR), what will happen? Who knows! There is nowhere for the routine that was supposedly called to return to.
<br>
<br>The RTS will get hit because the code goes in order. If you stick a subroutine out of the regular linear order (i.e. somewhere after your main game loop), that portion of code will be jumped to, code executed, then when it hits RTS, return to where it left off in the main loop of the program.
<br>
<br>I&apos;m really bad at explaining things. I hope you understand what I mean. RTS will get hit because of the linear layout of the language, but the results will be nothing like what you want if there was no Jump to SubRoutine beforehand.
				</div><div class="mdl-card--border"></div>