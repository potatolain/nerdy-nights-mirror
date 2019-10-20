<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jan 22, 2014 at 11:38:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	Should I not be not be touching the SPRITE_BANK addresses at all when doing player movement?</div>
Consider your sprite page as write only. &#xA0;All your player/enemy variables should be somewhere else so you don&apos;t have to read from it. &#xA0;The idea is to decouple the sprite page (used for drawing) from the object variables (used for moving/collisions).<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	As far as rendering sprites, should I figure out the maximum number that will be on a screen at once and then load all of them in a table each time that I call the LoadSprites routine?</div>
You would go through each one of your players/enemies/objects and copy the x/y/tile to the sprite page if that object is on screen and active. &#xA0;The number that will be on screen won&apos;t matter unless you have more than 64 sprites total.<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	The &quot;fill sprites&quot; thing you mention, is that part of the sprite table, or will a separate routine be needed? I assume that it is part of the table, but just wanted to clarify.</div>
All those 3 parts (move, render, fill) are completely separate functions. &#xA0;The fill sprites only fills the unused sprites with Y = off screen. &#xA0;If you want something slightly easier and less efficient, first fill ALL sprite with Y = off screen, then do render sprites. &#xA0;That way any unused sprite slots will already be off screen.<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	Sad to say, but the last comment leaves me baffled in terms of the &quot;if you have a cut screen (?) you skip move+render and just do fill.&quot;&#xA0;</div>
Go to 3:10 in this video of Battle Kid:&#xA0;<br clear="all"><div class="col-md-6"><div class="embed-responsive embed-responsive-16by9"><iframe width="500" height="280" frameborder="0" src="https://www.youtube.com/embed/yne04hukuyc" allowfullscreen></iframe></div></div><br clear="all"> &#xA0;Player is on screen, then the cut screen with dialog shows up. &#xA0;Don&apos;t want the player visible or able to move around, so the move and render steps get skipped. &#xA0;When the cut screen exits the player is still in the same place and rendered again.<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	Sorry for asking you to dumb it down a shade (to quote a famous cartoon character), but I want to make sure that I get what is going on before proceeding and the having to go back and redo a bunch of things.</div>
Don&apos;t be sorry, thats what this thread is for &#xA0;<span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
<br>
				</div><div class="mdl-card--border"></div>