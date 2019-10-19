<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Mar 31, 2014 at 5:22:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					1: They are not the same. HIGH() is an ASSEMBLER FUNCTION and goes to the label we used, and pulls the high and low bytes with the function to get them so in our code we don&apos;t have to use random numbers, when it moves our code is automatically right.
<br>
<br>2: [] addressing mode means &quot;Look at where zeropage (variable name in []) points to and adds Y to it. The INC doesn&apos;t need brackets because we don&apos;t care wtf it points to, it just need to be incremented so our data is pulled right from the pointer location. Pointer is a 2 byte variable. low and high attached just say which byte it is we are accessing, with the low byte being the pointer it&apos;s self.
				</div><div class="mdl-card--border"></div>