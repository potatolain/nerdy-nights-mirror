<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jan 27, 2015 at 5:13:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Vectrex280996</b></i><br>
<br>
Forget it...</div>
<br>
In case you haven&apos;t forgotten it, I don&apos;t remember seeing a wait for sprite 0 flag to be cleared first. &#xA0;The flag is cleared at the end of vblank, so if you check for it set before then you will get the results from the previous frame. &#xA0;Not sure if that was the problem but its something to check!
				</div><div class="mdl-card--border"></div>