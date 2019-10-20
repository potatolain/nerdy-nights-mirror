<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Aug 30, 2013 at 9:35:01 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>bunnyboy</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>NESHERO27</b></i><br>
		<br>
		...</div>
	Depends on the mapper!<br>
	<br>
	Some mappers like UNROM switch only the first 16KB of PRG ($8000-BFFF) and keep the last 16KB ($C000-FFFF) as a fixed bank. &#xA0;In those cases the vectors are only needed in the last 16KB of PRG.<br>
	<br>
	Some mappers like AOROM switch all 32KB ($8000-FFFF) at once. &#xA0;In those cases the vectors need to be in every 32KB of PRG because you don&apos;t know what bank will be active when NMI/IRQ/reset happens. &#xA0;Hitting the reset button does not change the active bank for almost all mappers, so vectors must be available in any bank that could possibly be swapped in.</div>
<br>
Well that certainly makes sense, I was not expecting such a clear solution <span class="sprites_emoticons absmiddle" id="emo_smile"></span> &#xA0;Thanks!<br>
<br>
				</div><div class="mdl-card--border"></div>