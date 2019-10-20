<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Dec 17, 2016 at 10:36:32 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					*+4 means skip four bytes. That&apos;s a cheap alternative to the local or unnamed labels in assemblers that don&apos;t have these.
<br>
<br>The routine worked all fine for me in a few games, without the suggested changes. They&apos;re mathematically correct, though (eor $ff is a cheap version of negation), but all they affect to is shifting the target point by a pixel. So it only will get issues when the target is really close, like just few pixels away.
				</div><div class="mdl-card--border"></div>