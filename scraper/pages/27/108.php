<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jan 8, 2014 at 4:38:01 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m not looking at the code, but if you want to move others based off the first sprite, you obviously need to figure the first sprite position, then you need to move all other sprites based from that number instead of any other number you&apos;ll be using to initiate them, they should be initiated this way, too.
<br>
<br>And if there&apos;s a pixel off, your math is a pixel off somewhere. Make sure to CLC before you ADC. Then also lastly, indent your code. You need white space before instructions to really tell the assembler it&apos;s not a label, and also you need it to make it more readable, as the execution flow is 10x easier to see with label indents.
				</div><div class="mdl-card--border"></div>