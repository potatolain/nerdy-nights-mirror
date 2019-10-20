<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Feb 13, 2014 at 1:34:56 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks for the explanation! However, I still don&apos;t understand a few things...
<br>1.Whenever I input  .res 2 in NESASM3, it says &quot;Unknown instruction!&quot;. Any idea on how I could adapt this piece of code to the NES?
<br>2.What I understand about using the prng is that you call it with a JSR to get the current value of random and random+1, then you can do something like
<br>  LDA random
<br>  STA playerspeed
<br>to make the player&apos;s speed &quot;random&quot;. random+1 should be used in a 16 bit value (I think).
				</div><div class="mdl-card--border"></div>