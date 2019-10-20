<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Aug 01 at 12:26:32 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Well, looking at the code, in order for the code to work inside NMI after pasting it back in there, you&apos;d have to take out more than a single RTS. The NMI needs to get all the way down to RTI no matter what, so your code needs to be modified a little bit. Basically in every spot there is a RTS in MoveShip1, you&apos;ll need to delete the RTS and instead JMP to MoveShip2, so the second ship&apos;s routine is read. Then every place there is a RTS in MoveShip2, you&apos;ll need to delete the RTS and instead JMP to the end of MoveShip2 (after the RTS after .Reset2) so that it arrives at RTI.
<br>
<br>Writing it the way you have it currently written (moving the routines out of NMI and just JSR&apos;ing to them) is way cleaner/easier due to the ability to use the RTS in the individual subroutines. Jumping back to the main NMI this way allows you to not have to keep track of all the weird flow of things.
<br>
<br>Right now, if it hits an RTS inside of NMI without having to go through a JSR to get there, it is returning to god knows where and it will behave erratically. I&apos;m surprised it worked at all, honestly. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
				</div><div class="mdl-card--border"></div>