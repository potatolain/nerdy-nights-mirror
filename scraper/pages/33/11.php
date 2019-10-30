<div class="mdl-card__title"><strong>bigjt_2</strong> posted on 
		
			
				
				May 20, 2010 at 5:34:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>albailey</b></i><br><br><div><br></div><div>So in summary, if you are going to put a status area on the bottom of your screen, make sure you load it into both $2000 and $2400 nametables, and make sure that at least the top line of the status region runs continuously the entire width.&#xA0;</div><div><br></div><div>Al</div><div><br></div></div><br><br>I actually noticed this, too, when I first started messing around with the Sprite 0 code a couple weeks ago.&#xA0; I was originally trying to make my status bar like SMB1s where it seems transparent and only the bottom of the coin is the sprite used for intersection.&#xA0; As soon as that sprite leaves the non-transparent pixels background, everything crashes.&#xA0; The best thing to do is what Al suggested above.&#xA0; I still have no clue how SMB1 got it to work.&#xA0; (Perhaps moved the sprite as the screen scrolled?&#xA0; I have no idea.)&#xA0; But then I guess that game is programmed a little oddly, from what I&apos;ve heard.<br>
				</div><div class="mdl-card--border"></div>