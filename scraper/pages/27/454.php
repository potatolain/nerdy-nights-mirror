<div class="mdl-card__title"><strong>Baka94</strong> posted on 
		
			
				
				Dec 17, 2014 at 3:17:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	Baka94, you &apos;specify&apos; it by the board configuration itself. For emulators you can just set the number of CHR banks in the iNES header to zero, this means the game uses CHR RAM. However, it is not guaranteed that all emulators will act like this for those configurations that does not typically use CHR RAM (such as NROM).</div>
<br>
I guess I still need some CHR ROM to store the graphics anyway. Then load parts that I want in the CHR RAM and put them to the pattern tables through $2006 and $2007.<br>
<br>
It seems that iNES mapper 119 is only MMC3 mapper that uses both CHR ROM and RAM, so I&apos;ll probably use that.<br>
				</div><div class="mdl-card--border"></div>