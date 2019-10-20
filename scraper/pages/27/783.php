<div class="mdl-card__title"><strong>Alder</strong> posted on 
		
			
				
				May 11, 2016 at 4:18:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So I&apos;ve read from a couple places that doing &quot;everything in NMI&quot; is a bad idea.  What&apos;s the alternative?  Currently, my code looks like this:
<br>
<br>RESET:
<br>  ;some initialization
<br>  ;infinite loop
<br>NMI:
<br>  ;transfer sprite data
<br>  ;redraw background tiles if necessary
<br>  ;PPU cleanup
<br>  ;Read controller state
<br>  ;Run 1 game engine cycle
<br>  ;Update sprite data at $0200 RAM (or wherever I put them)
<br>  ;RTI 
<br>-actual subroutines/data-
<br>
<br>Is this structure &quot;doing everything in NMI&quot;?  Should I put my game logic somewhere else (in the infinite loop?)
				</div><div class="mdl-card--border"></div>