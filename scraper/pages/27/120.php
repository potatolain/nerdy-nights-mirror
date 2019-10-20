<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Jan 22, 2014 at 4:39:12 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>bunnyboy</b></i><br>
	<br>
	As you get into more advanced games, using the sprite page for storage turns into a bad idea. What you will want is:<br>
	<br>
	Move player/enemies - none of the variables used will be in the sprite page. player position is separate from sprite coords<br>
	Render sprites - copy relevant data from the player/enemies into the sprite page. if an object is off screen or hidden it won&apos;t get copied.<br>
	Fill sprites - set the Y coord of all unused sprite slots to off screen<br>
	<br>
	That way if you have a cut screen you skip move+render and just do fill. No sprites will be on screen but all your player data is still valid.</div>
This never occured to me.&#xA0; Very interesting.&#xA0; I haven&apos;t run into something where this would be a problem as all the cut screens that I&apos;ve done have been between independent screens.&#xA0; Good tip!<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>