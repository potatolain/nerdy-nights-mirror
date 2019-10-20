<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 11, 2016 at 11:18:14 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Basically it all has to do with memory mapping. All 6502 processors can access a 64k address space. Different types of machines have different hardware mapped to different locations in that address space, and all communicate over that. So when you write a value somewhere, it might get stored in RAM, or it might trigger a piece of hardware to do something. Think of like a big telephone switchboard. The cpu sends messages to the switchboard, and whomever is hooked up to certain telephone numbers will repsond. Some people pick up the phone and go: &quot;Ah, ok you want me to remember the number 10. You got it.&quot; Others might go: &quot;Oh, you want to know the current state of the controller? Button A was pressed.&quot; Each machine will have a different switchboard all hooked up to different sorts of &quot;people&quot; at the other end (ram, graphics hardware, sound hardware, and the rest). The CPU itself remains relatively unchanged in most machines that use it. Some may have small modifications, though. For instance the NES cpu has some audio hardware that sits on the same die as the cpu itself. But it&apos;s still a separate set of logic though, not really the core cpu itself.<br>
<br>
Additional cartridge hardware plugs into that same 64k switchboard. So mappers, expansion audio chips and such also will plug in to certain locations accessible by the cpu when the cartridge is inserted.
				</div><div class="mdl-card--border"></div>