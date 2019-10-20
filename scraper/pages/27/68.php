<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jun 22, 2013 at 3:36:08 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>gliptitude</b></i><br>
	<br>
	In my dirty readings of Nerdy Nights etc, I thought I read that scrolling involved drawing the background graphics off screen, a full screen area in advance. Can this be done for a diagonal scroll???? Is diagonal scrolling more complicated than horizontal or vertical?<br>
	&#xA0;</div>
You don&apos;t need to draw a full screen in advance. You will draw new stuff when required. For example, if you limit the &quot;camera&quot; to move 8 pixels/frame in a single direction, you will need to draw at most one 8 pixel row/column per frame.<br>
<br>
Diagonal scrolling is significantly harder to implement than simple horizontal/vertical scrolling. But it also depends on where you cap the scroll speed and other limitations you set. For example, if you never scroll more than 1-2 pixels per frame in a direction and force the scrolling to end on a 8x8 grid (could be usable in an RPG style game, or an overworld map in general), it&apos;s easier to implement than allowing the screen to scroll 16 pixels in either direction on each frame.
				</div><div class="mdl-card--border"></div>