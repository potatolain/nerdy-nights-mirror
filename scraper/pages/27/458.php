<div class="mdl-card__title"><strong>Baka94</strong> posted on 
		
			
				
				Dec 18, 2014 at 2:41:01 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	If you use CHR RAM, you will always have to put something there with your code. Otherwise you&apos;ll have random garbage instead of graphics (on the hardware), or blank tileset (in emulators). PPU does not do anything automatically, it does not even know any difference between CHR ROM, CHR RAM, or lack of ROM/RAM (you can even wire it up so it&apos;ll use its own nametable RAM). PPU does not automatically put anything into CHR ROM, it is basic feature of the ROM itself, to keep preprogrammed information. ROM is not programmable by PPU/CPU, it is only programmed during manufacturing process.</div>
<br>
What I meant was that when you put the .chr file in your code like this:<br>
<br>
<code>&#xA0;.bank 2<br>
&#xA0;.org $0000<br>
&#xA0;.incbin &quot;Graphics.chr&quot;</code><br>
<br>
You don&apos;t need to do anything else to make it appear in the pattern tables. This is when using CHR ROM at least.<br>
<br>
So, after loading the graphics to the CHR RAM, I then need to use $2006 and $2007 registers to write it to the pattern tables?
				</div><div class="mdl-card--border"></div>