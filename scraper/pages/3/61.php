<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jun 24, 2013 at 8:24:08 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					LDA and LDY work the same with the same right side, just different registers.
<br>
<br>LDA #$22 puts #$22 ($22 is a memory location, NOT the number, big difference.) to A.
<br>
<br>LDY #$22 puts #$22 to Y.
<br>
<br>That&apos;s basically it. I don&apos;t understand your problem, as it just does what the text says. If it says #22, it gets decimal 22 loaded. If it says #$, it&apos;s hex, if it says #%, it&apos;s binary.
				</div><div class="mdl-card--border"></div>