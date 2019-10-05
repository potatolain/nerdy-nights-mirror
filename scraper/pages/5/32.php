<div class="mdl-card__title"><strong>bigjt_2</strong> posted on 
		
			
				
				Feb 19, 2010 at 1:16:20 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br>I&apos;d imagine that when you got to collision detection, this will not be as efficient.  But then, I&apos;m a noob as well, and I don&apos;t really know what I&apos;m talking about.  <img border="0" src="i/expressions/face-icon-small-tongue.gif" style="display: none;">
<br>
<br>I basically use a routine that stores $0200 into sprite_vertical and $0203 into_sprite horizontal.  Then do all the moving, collision detection and all the with these variables.  That way you can loop all the enemies and stuff through without having to write the same code for them.  At the end, you just reverse the process putting the sprite_--- into the addresses then updating the other 3 sprites with reference to that one.
<br>
<br>Make sense?
<br>
<br>But if your way works, run with it.  You have to figure out your own style.</div>Speak of the devil!&#xA0; Collision detection is actually what I&apos;m starting on with this latest test right now!&#xA0; <img src="/i/expressions/face-icon-small-happy.gif" style="display: none;"><br><br>Are these routines working well for you on the collision detection?&#xA0; And if so (forgive me if this is massively inappropriate - like I said I&apos;m a noob) would you mind pasting some example code?&#xA0; If you&apos;d rather not, I understand.<br><br><br>
				</div><div class="mdl-card--border"></div>