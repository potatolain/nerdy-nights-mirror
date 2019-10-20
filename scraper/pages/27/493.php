<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 16, 2015 at 7:02:31 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>bunnyboy</b></i><br>
	<br>
	Here are the executive summaries, with links to more info. &#xA0;Ask more specifics if needed!<br>
	<br>
	When a non-transparent pixel on the first sprite overlaps with a non-transparent pixel on the background, a PPU flag is set. &#xA0;Your code polls the flag to wait for that point of the screen to be drawn. &#xA0;Normally used for split screen scrolling without extra hardware, like SMB.</div>
<br>
I was thinking of a completely different use of it. Let say sprite 0 is the front of the car (see attachment above), and the track is like this (800% zoom, and yes, I know the track is too thin, this is just an example to explain a concept I wish to implement) where the gray is the transparent color:<br>
<br>
<img align alt border="0" hspace="4" src="images/missing/93C2A55F-D2B8-4753-FAEF48451E44AAC7.png" vspace="4" original-src="http://nintendoagemedia.com/users/21264/photobucket/93C2A55F-D2B8-4753-FAEF48451E44AAC7.png"><br>
<br>
1. Can I use sprite 0 collision to detect the fact that the car went off-track?<br>
<br>
2. If I have 4 cars, and each NMI I rotate which car uses the sprite 0 for its front (fi: <strong>red 0 </strong>blue yellow green &gt;&gt; next frame <strong>blue 0 </strong>yellow green red &gt;&gt; next frame <strong>yellow 0 </strong>green red blue &gt;&gt; next frame <strong>green 0 </strong>red blue yellow), can I use sprite 0 collision to detect, once every 4 NMI frames (ie. 1/15th of a second), if that car (red, blue, yellow, or green) went off track? I have an alternative plan about this, but this would make things way easier, if once every 4 frames would turn out to be an high enough detection frequency for off-tacks checks.<br>
<br>
3. Also, if the two above are true, when exactly (if a specific timing is needed) should the code perform this check?<br>
<br>
Thanks, Appreciated! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user
				</div><div class="mdl-card--border"></div>