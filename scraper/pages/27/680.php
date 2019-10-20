<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Oct 15, 2015 at 11:58:10 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br>
<br>
... <strong>and character stats will take another significant chunk</strong>, ...</div>
<br>
How big is the span (min to max) in such stats values?<br>
<br>
Maybe a possible solution, to fit everything in the RAM space, is to fit more than one info in a single Byte.<br>
Let say stats go 00 to FF: in a byte you can store only one.<br>
Let say stats go 00 to 0F: in a byte you can store two of them.<br>
Let say stats go 00 to 03: in a byte you can store four of them.<br>
Let say stats are boolean 00 or 01: in a byte you can store eight of them.<br>
<br>
In any case, you then need to use LSRs instructions (or maybe in some cases ROLs instructions, if you care about saving few cycles), followed by ANDs instrutions, in order to get the specific values, and then again AND, ORA, and such instruction to &quot;build&quot; the Byte again and store the info back in RAM.<br>
<br>
It is likely not the most programmer friendly approach, is way more complex than use a byte for each single info, but if your priority goal is to store a lot of info in a little RAM space, from experience I can say that, if planned and coded correctly, it works perfectly and it is not so inefficient.<br>
<br>
Just trying to help, probably there are better solutions out there. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>