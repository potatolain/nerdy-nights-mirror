<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Apr 22, 2014 at 4:26:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>3GenGames</b></i><br>
		<br>
		Moving forward and not understanding is why you don&apos;t get it. Just gonna point out a logical error too: You don&apos;t disable the PPU then not enable it. You have to enable it (Or at MINIMUM NMI&apos;s) forit to be enabled. Your NMI might cause glitches if you don&apos;t remember, it can and does happen. Disabling, then having an NMI happen when &quot;off&quot; in the middle of doing stuff will lead to nasty bugs.</div>
	<br>
	I don&apos;t think it will be a problem because nothing really happens between that code and the NMI. I was enabling the PPU right after the LoadBackground and it was wigging out my screen. Since going this route, my screen issues have fixed. If it breaks future code, then I guess I will be forced to cross that bridge when it happens. The NMI is still and enigma to me, so any advice helps!</div>
<br>
More than likely, you touch $2006 in between screen enabling. Look at The Skinny:&#xA0;<a href="http://wiki.nesdev.com/w/index.php/The_skinny_on_NES_scrolling" target="_blank">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
Basically, $2000, $2005, and $2006 all share bits of a single 16-bit register, so the last thing you need to do in NMI is update $2005 (x2) and $2000. That will more than likely fix your problem.<br>
<br>
And lastly, NMI is easy:<br>
Do graphics updates, including map changes.<br>
Do sprite updates.<br>
(Optional) Do sound stuff.<br>
Write $2005 (x2) and $2000 to the correct values.<br>
Return to the main engine to run engine stuff.<br>
<br>
				</div><div class="mdl-card--border"></div>