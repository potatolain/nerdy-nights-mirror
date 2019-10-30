<div class="mdl-card__title"><strong>rizz</strong> posted on 
		
			
				
				Feb 18, 2010 at 5:45:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thank you guys.  When I mentioned control byte 1, I was referring to the 7th byte of the iNES header (where you have to tell it the low 4 bits of the mapper number).
<br>
<br>The good news is that the code is now working (I am doing a joint project with another guy, and he saw where the error was).  The spot where the bank switch was occuring needed to be set a little earlier in the code.
<br>
<br>Also, the MMC3 uses 8KB banks, but the iNES header needs to know 16KB banks?  So, if you have (6) 8KB banks of code, you have to tell the the header &quot;3&quot; banks?
<br>
<br>Did you guys have an answer to my question #4 by chance?  I&apos;d love to get an explanation on that.
<br>
				</div><div class="mdl-card--border"></div>