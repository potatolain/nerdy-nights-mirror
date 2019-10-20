<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jun 2, 2014 at 3:53:09 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>thefox</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Mega Mario Man</b></i><br>
		<br>
		Now, when I switch from the game over game state back to the title screen, the title screen is all 0s. When I look at the Name Table Viewer in FCEUXD, the correct title screen is in $2000 and mirrored to $2800 and the other 2 name tables are all 0s. Now, if I press start again, the game playing state loads just fine and I can play the game again.</div>
	When you write the scroll in NMI by using $2005, you should also write $2000 to completely set the scroll. The nametable select bits in $2000 can be interpreted as the 9th bits of x and y scroll offsets, allowing scroll values to have range 0..511 (for x-coordinates) and 0..479 (for y-coordinates).</div>
BOOM! Genius!<br>
<br>
That was the issue. You know, I played with this a long time ago when I started coding. Earlier versions of this game actually have that code in the NMI, but I took it out and it seemed not to effect anything...until now.<br>
<br>
Thanks thefox!<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>