<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Sep 4, 2013 at 11:01:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Cowpar2</b></i><br>
	<br>
	If I change the low part of the latch to anything past #$40 it will mess with the screen, but anything less then #$20 the score doesn&apos;t even appear.<br>
	How do I get it to appear, say, 16 px down and all the way to the right?</div>
In fceux run your game then open the &quot;Name Table Viewer&quot;. &#xA0;Put the mouse over where you want the score to appear in that window and the &quot;PPU Address&quot; will tell you the address to use. &#xA0;It will be something like $205F.<br>
<br>
Rows are $20 tiles long, so down 2 rows is $2000 + (2 * $20) = $2040. &#xA0;All the way to the right is 1 less than a full row, so $2040 + ($20 - 1) = $205F.<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>