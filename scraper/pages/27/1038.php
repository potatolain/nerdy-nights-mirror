<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 16 at 7:37:06 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					No, because all the sprites are being set to $FE on the vertical axis which is off the bottom of the screen. Sprites set to 0 will bleed onto the screen a little bit and won&apos;t fully be hidden. Think less about the tile number and more about the sprite positioning. It&apos;s setting all the values of each sprite to $FE: y axis, tile number, palette number, x axis.<br>
<br>
The actual sprite <em>loading</em> routine will obviously happen after this, so all the sprites you actually plan on loading will have their proper values loaded at that time. This is just clearing the memory and &quot;resetting&quot; everything since RAM can be unpredictable upon power on.
				</div><div class="mdl-card--border"></div>