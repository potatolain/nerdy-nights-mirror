<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Feb 19, 2010 at 12:57:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;d imagine that when you got to collision detection, this will not be as efficient.  But then, I&apos;m a noob as well, and I don&apos;t really know what I&apos;m talking about.  <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-tongue.gif">
<br>
<br>I basically use a routine that stores $0200 into sprite_vertical and $0203 into_sprite horizontal.  Then do all the moving, collision detection and all the with these variables.  That way you can loop all the enemies and stuff through without having to write the same code for them.  At the end, you just reverse the process putting the sprite_--- into the addresses then updating the other 3 sprites with reference to that one.
<br>
<br>Make sense?
<br>
<br>But if your way works, run with it.  You have to figure out your own style.
				</div><div class="mdl-card--border"></div>