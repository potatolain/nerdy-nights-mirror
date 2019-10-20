<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Feb 16, 2012 at 2:22:36 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>muffins</b></i><br>
	<br>
	I think I&apos;m having the same problem as Kenny B with overflow of nametable data going into attribute memory.&#xA0; My loops that copy the nametable data into memory copy 1024 bytes, but that should be okay because I have 960 bytes of nametable data and 64 bytes of attribute data which are contiguous in memory.&#xA0; I explicitly set them up in the data section so that I could copy it all in one go (yes, I know this is bad because it mixes logic with data...shame on me) so I&apos;m not sure why there seems to be some overflow.&#xA0; Do you really have to explicitly stop looping after 960 bytes, then write to $23CO through port $2007 just to prevent the overflow?&#xA0; That doesn&apos;t seem right to me since that memory is contiguous anyway.<br>
	<br>
	Code here:<br>
	<br>
	<a href="http://pastebin.com/N0tQQ1td" target="_blank" original-href="http://pastebin.com/N0tQQ1td">http://pastebin.com/N0tQQ1td</a></div>
<br>
When I changed your attribute data to normal looking attribute data it worked fine. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
&#xA0;&#xA0;&#xA0; titleattr:<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
<br>
&#xA0;&#xA0;&#xA0; attributes:<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
&#xA0; .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000<br>
<br>
				</div><div class="mdl-card--border"></div>