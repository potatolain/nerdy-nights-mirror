<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 13, 2015 at 1:42:14 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>bunnyboy</b></i><br>
	<br>
	The PPU register $2000 (<a href="http://wiki.nesdev.com/w/index.php/PPU_registers#Controller_.28.242000.29_.3E_write" target="_blank">http://wiki.nesdev.com/w/index.php/PPU_registers#Controller_...</a> ) determines which 4KB pattern table is for bg and which is sprites. <strong>They can also both use the same set</strong>, or be changed at (almost) anytime.</div>
<br>
And this is a great news. It works perfectly on emulator after switching rendering off to load the new background, then&#xA0; turning it on again with the new background loaded from the other pattern table; and it allows to have sprites on screen from the same pattern table too. This solves the project needs completely. Thanks again to both!
				</div><div class="mdl-card--border"></div>