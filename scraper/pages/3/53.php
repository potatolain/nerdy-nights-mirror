<div class="mdl-card__title"><strong>glenn101</strong> posted on 
		
			
				
				Feb 12, 2012 at 7:35:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m just wondering is .bank2 always used for graphics storage via the PPU?<br>
How does it know to access $0000 of PPU memory and not $0000 of CPU memory?<br>
<br>
Also why is STA $0000, x used continuously inside the clrmem: label? isn&apos;t the contents of register X at this point 0 and hence doesn&apos;t modify the address accessed?<br>
<br>
*Edit*<br>
I know the answers to my questions now.
				</div><div class="mdl-card--border"></div>