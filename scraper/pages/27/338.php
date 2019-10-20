<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jun 2, 2014 at 3:33:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	Now, when I switch from the game over game state back to the title screen, the title screen is all 0s. When I look at the Name Table Viewer in FCEUXD, the correct title screen is in $2000 and mirrored to $2800 and the other 2 name tables are all 0s. Now, if I press start again, the game playing state loads just fine and I can play the game again.</div>
When you write the scroll in NMI by using $2005, you should also write $2000 to completely set the scroll. The nametable select bits in $2000 can be interpreted as the 9th bits of x and y scroll offsets, allowing scroll values to have range 0..511 (for x-coordinates) and 0..479 (for y-coordinates).<br>
				</div><div class="mdl-card--border"></div>