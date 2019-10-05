<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Dec 29, 2011 at 5:51:50 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Line 2: Because it can still be triggered and will do bad things if your program is set up. You never do not initialize registers and just leave them what they are, you need the computer in a known state. Plus, on mappers that do have it, you have to do it anyway so nothing changes when moving to a better mapper.<br>
<br>Line 3: Yep, it doesn&apos;t have it because it&apos;s disabled.&#xA0;<br>
<br>Line 4/5: On $4016 write it resets both controllers. On 4016 read and 4017 read it reads the controllers. On 4017 writes it write to the APU, registers don&apos;t exist in both states (read and write) all the time, they sometimes change &quot;meaning&quot; completely. 4017 is one of those registers that changes on reads and writes.
<br>
<br>Line 9/10/11: It&apos;s when sound is playing samples. If they are playing you want to disable the sound and the acknowledging program.
				</div><div class="mdl-card--border"></div>