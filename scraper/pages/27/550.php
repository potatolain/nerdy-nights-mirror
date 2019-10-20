<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Mar 17, 2015 at 5:20:27 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The second 16kb bank is typically fixed and the first, swappable. The NES looks for vectors which point to the reset code address at start up (which are placed at the very end of the second bank, see wiki). This starts the program and tells it what to do and how to begin. The programmer either has to know which bank will be fixed or put the vector/reset code in every bank...cause the NES will randomly engage one upon start up.<br>
<br>
In the case where all 32kb are switched, you have to put vectors/resets in each bank or force the NES to switch to the proper bank after it starts up in a random one.<br>
<br>
But most mappers are just more creative ways of swapping the first 16kb (or the 8kb 1/2 bank, and so on).<br>
<br>
<br>
eta: &#xA0;^^beat me to it.
				</div><div class="mdl-card--border"></div>