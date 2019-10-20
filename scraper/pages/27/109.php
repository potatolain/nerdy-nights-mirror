<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jan 8, 2014 at 4:40:31 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Would have to see more code, but you probably have the order wrong.  Likely you have:
<br>
<br>MovePlayer (updates only first sprite)
<br>sprite dma (now first and rest are out of sync)
<br>UpdatePlayerSprites (now in sync, but too late to display)
				</div><div class="mdl-card--border"></div>