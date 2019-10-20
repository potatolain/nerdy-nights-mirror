<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 15, 2014 at 5:01:40 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Baka94, you &apos;specify&apos; it by the board configuration itself. For emulators you can just set the number of CHR banks in the iNES header to zero, this means the game uses CHR RAM. However, it is not guaranteed that all emulators will act like this for those configurations that does not typically use CHR RAM (such as NROM).
<br>
<br>MadnessVX, you have to specify number of 16K banks in the iNES header. Internal banks granularity is up to the mapper, it is not reflected in the header in any way other than the mapper ID. NESASM also throws in the unnecessary 8K bank granularity, inherited from the PCE roots of the tool.
<br>
<br>For both questions, I&apos;d recommend to switch to CA65, it is way more flexible in creating various complex configurations. It may feel a bit difficult to understand at beginning, but it is worth the trouble.
				</div><div class="mdl-card--border"></div>