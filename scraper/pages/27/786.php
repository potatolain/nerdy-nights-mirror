<div class="mdl-card__title"><strong>Alder</strong> posted on 
		
			
				
				May 12, 2016 at 11:03:10 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Ah, okay.  The only thing I&apos;m wondering is how to keep my Game Engine running at the right speed.  Looking at your code, I&apos;m guessing that&apos;s what the sleeping variable is for.. are we just setting that to true at the end of the game engine, and checking it at the beginning of the infinite loop to know whether or not to run the game engine?  Then setting it to false during NMI to make the game engine run one cycle after NMI returns?
<br>
<br>I noticed you put your sound engine/sleeping code before the skip_graphics_updates label.  Can you explain what the updating_background variable is for?  It seems it&apos;s doing more than just signalling that background tiles need redrawn?
<br>
<br>Thanks!
				</div><div class="mdl-card--border"></div>