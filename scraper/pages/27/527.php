<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Feb 19, 2015 at 9:07:16 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi all. Ok, really basic generic question about NES game design.<br>
<br>
There is a &quot;metasprite&quot;, made of 4 sprites (ie 16x16px) which can be hit. The outline of the not transparent part (which I will call &quot;filled&quot;) of the image drawn in the metasprite is not rectangular, as for instance this image of a space ship I draw:<br>
<br>
<img align alt border="0" hspace="4" src="images/missing/5585923A-EC0E-4604-05608639C85DC413.png" vspace="4" original-src="http://nintendoagemedia.com/users/21264/photobucket/5585923A-EC0E-4604-05608639C85DC413.png"><br>
<br>
I guess it is maybe possible to program a complex collision check which detects if a point is inside or outside the &quot;filled&quot; area also in a NES game, but it is way simpler and good enough result wise to just set a rectangular box somewhere inside the metasprite and check for point collisions against that box.<br>
<br>
So here my question: is there a generic rule on how to set that box? I mean, generically speaking, for 16px sprites not rectangular in shape, it is better (ie. is the convention for NES programmers) to have few more transparent pixels trigger the collision; or is better to have few more filled pixel to _don&apos;t_ trigger the collision? Given that matasprite above, which one of the red boxes above seems the most accurate and/or balanced one to implement in your opinion? Or you would use the whole 16x16px area of the metasprite to check for point collisions?<br>
<br>
I&apos;m mostly wondering if a generic convention, about how to set collision boxes for a 16px metasprites in NES game design, exists. Thanks!<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user<br>
<br>
<strong>Edit</strong>: misspelling.
				</div><div class="mdl-card--border"></div>