<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 17, 2016 at 10:41:40 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	*+4 means skip four bytes. That&apos;s a cheap alternative to the local or unnamed labels in assemblers that don&apos;t have these.<br>
	<br>
	The routine worked all fine for me in a few games, without the suggested changes. They&apos;re mathematically correct, though (eor $ff is a cheap version of negation), but all they affect to is shifting the target point by a pixel. So it only will get issues when the target is really close, like just few pixels away.</div>
<br>
<br>
<br>
Thanks, clear. It was probably me overlooking something then.<br>
I might give it a second try. So far, I never needed 256 directions, so since this routine seemed inaccurate anyways, I used simple alternatives dividing the circle in like 16 dir (N N NNE NE ENE E ...) and stick to that.<br>Thanks again for your time and your answers.
				</div><div class="mdl-card--border"></div>