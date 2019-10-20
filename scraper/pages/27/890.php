<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jan 17, 2017 at 8:45:12 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You can safely use quite a bit of page one for RAM stuff. The stack uses the end of page one to store values/where to return from RTS, etc, so if you need more RAM space, you can very easily use $0100-$0180 and even further than that. It will of course vary project to project, but you can always watch in FCEUX&apos;s hex editor to see how much your game is typically using.
<br>
<br>Of course this is only useful if you&apos;re out of all the other RAM pages.
				</div><div class="mdl-card--border"></div>