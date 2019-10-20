<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				May 22, 2014 at 12:47:59 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The main problem is your code is just really....terrible flow, it doesn&apos;t work. Take out the code in the NMI, and make an NMI handler. Just something to show NMI has happened, like clearing a value somewhere. Then make the game engine react on that. Both code screws up, one is just not see able and &quot;seems&quot; to work.
<br>
<br>But to get this to work for now, move 127-130 to where NotRightButton, and then delete the JMP ButtonA because you HAVE to return from the NMI, you never will if you keep looping forever and crash the stack.
<br>
<br>And lastly, never read buttons directly from the port, terrible thing to do in every aspect, read them into a variable and then use the variable. Sometimes you will need buttons many times in your programs, if you do that you will not be able to ever do that without it looking like crap and wasting 1/2 your CPU.
				</div><div class="mdl-card--border"></div>