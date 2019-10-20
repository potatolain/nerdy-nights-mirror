<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Oct 07 at 2:17:55 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Every game I&apos;ve made has been entirely in the NMI, although I have had to fight background update flickering occasionally.
<br>
<br>The &quot;proper&quot; way to do it is to create some sort of routine that writes to RAM all the background graphics/palette updates you need to do, and then when NMI hits it looks to see if there are values in that buffer and draws them. So you&apos;re always constantly putting the &quot;next frame&apos;s updates&quot; in RAM and then when NMI comes it draws them all at once in one fell swoop.
				</div><div class="mdl-card--border"></div>