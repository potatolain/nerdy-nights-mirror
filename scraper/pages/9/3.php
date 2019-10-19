<div class="mdl-card__title"><strong>albailey</strong> posted on 
		
			
				
				May 16, 2010 at 10:19:26 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I should point out that this particular activity is extremely useful for homebrewers, and not just beginners.
<br>
<br>When I did sudoku I was storing my score values as hex.  When I wanted to display them on the screen as decimal, I figured it would be a simple activity.  Not so much.  Every snippet of 6502 source code on the web for doing the conversion assumes you are using a NORMAL 6502 with decimal mode, instead of the NES 6502 where it has been removed.  
<br>As a result I ended up redesigning my scoring system to do what Bunny shows in the first algorithm, which is to store each digit in a separate variable.
<br>
<br>Nowadays I use the exact same BCD algorithm that bunny has shown here. It&apos;s definitely one you want to add to your code library.
<br>
<br>Thanks B,
<br>Al
				</div><div class="mdl-card--border"></div>