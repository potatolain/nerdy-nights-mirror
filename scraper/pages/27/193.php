<div class="mdl-card__title"><strong>chowder</strong> posted on 
		
			
				
				Mar 20, 2014 at 5:46:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>chowder</b></i><br>
	<br>
	D&apos;oh! &#xA0;Of course the result needs to be 16-bit&#xA0;&#xA0; The other tile_x/tile_y part was a typo on my part. &#xA0;Thanks for the pointer thefox, it&apos;s much appreciated. &#xA0;That&apos;ll teach me for late night coding. &#xA0;And being a dumbass</div>
<br>
Cracked it, finally. &#xA0;This thread is very useful for anyone else struggling with bg/player collision:<br>
<br>
<a href="http://forums.nesdev.com/viewtopic.php?f=10&amp;t=9953" target="_blank">http://forums.nesdev.com/viewtopi...</a><br>
<br>
Thinking about it, it might be easier to just use a 120 byte array for bg collision (1 bit per 8x8 tile would suffice for my needs), thus saving oodles of space, but this works for now <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
				</div><div class="mdl-card--border"></div>