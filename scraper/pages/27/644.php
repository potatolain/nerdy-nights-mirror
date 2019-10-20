<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Aug 6, 2015 at 9:16:57 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>DarkKobold</b></i><br>
<br>
Can anyone explain how banking in PRG rom works? What confuses me is that the program counter is at a certain place, and then you need code in a different bank. So you jump to that bank, but the PC doesn&apos;t know that you&apos;ve swapped banks! So you&apos;ve just jumped to some arbitrary place in the new bank, wherever you were in the old bank. Obviously, there is some work-around, but at the moment, it just doesn&apos;t make sense how that could ever work, because the second you swap a bank, the code will be read from that bank.</div>
Some mappers (e.g. UxROM, MMC1, MMC3, and many others) have a &quot;fixed bank&quot;, where some part of the PRG ROM is permanently banked in. Usually it&apos;s the upper 16 KB or 8 KB of PRG. If you have all of the bankswitching code in the fixed bank, the problem you described doesn&apos;t occur.<br>
<br>
If 32 KB banking is used (e.g. AxROM, MMC1), usually you&apos;ll have to duplicate the bankswitching code in both banks to make sure that the code will still be available after the switch. It&apos;s little bit trickier than using a mapper that has a fixed bank.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>