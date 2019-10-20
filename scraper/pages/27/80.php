<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Aug 30, 2013 at 5:22:53 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>NESHERO27</b></i><br>
	<br>
	In looking through some examples of games I have noticed that with the switch to more banks there is often also the inclusion of more &quot;reset vectors&quot; sections in the code at the end of some of the banks, but not others. Does anybody have any idea as to where or why to place them different places? Thanks.</div>
Depends on the mapper!<br>
<br>
Some mappers like UNROM switch only the first 16KB of PRG ($8000-BFFF) and keep the last 16KB ($C000-FFFF) as a fixed bank. &#xA0;In those cases the vectors are only needed in the last 16KB of PRG.<br>
<br>
Some mappers like AOROM switch all 32KB ($8000-FFFF) at once. &#xA0;In those cases the vectors need to be in every 32KB of PRG because you don&apos;t know what bank will be active when NMI/IRQ/reset happens. &#xA0;Hitting the reset button does not change the active bank for almost all mappers, so vectors must be available in any bank that could possibly be swapped in.<br>
				</div><div class="mdl-card--border"></div>