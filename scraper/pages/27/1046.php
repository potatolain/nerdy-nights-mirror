<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 20 at 6:04:36 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Trying to mimick Asteroids for my controller reading demo. Its a simple game, single screen, but I got stuck at turning the sprite. Here&apos;s where I&apos;m at. 
<br>
<br>My chr file has three tiles for the player ship sprite. One facing up ($00), one facing left ($01), one facing diagonally up left ($02). 
<br>I figured with a flip of the vertical or horizontal bits I can cover 8 directions: facing up, down, left, right, and all the diagonals. 
<br>
<br>Moving left and right and up and down isn&apos;t hard (I&apos;ll try diagonals tomorrow), its turning I&apos;m stuck on. I&apos;d like to do the same as in the 2600&apos;s version of asteroids, where I can turn my ship in place by pressing left or right.  I&apos;m thinking I need something like this (psuedo):
<br>
<br>
<br>;Move from facing up to diagonal up left
<br>If $0201 is set to $00, 
<br>and left is pressed, then
<br>set $0201 to $02
<br>
<br>;Move from facing diagonal up left to left
<br>If $0201 is set to $02, 
<br>and left is pressed, then
<br>set $0201 to $01
<br>
<br>;Move from facing left to diagonal down left (flip $02 horizontally)
<br>If $0201 is set to $01 
<br>and left is pressed, then
<br>set $0201 to $02
<br>set $0202 to #%01000000
<br>
<br>...etc.
<br>
<br>
<br>Even if this is the way (seems this could be looped or easier somehow), I would only have 8 directions, I&apos;d like to get as close to 360 as possible, 16 minimum I suppose. 
<br>Do I need more tiles for my sprites to get more directions (16 - 360)? Also, is my psuedo example the best way to code &quot;turning in place&quot;? 
<br>
<br>Thanks!
				</div><div class="mdl-card--border"></div>