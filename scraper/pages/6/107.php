<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Apr 23, 2015 at 5:08:35 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>KHAN Games</b></i><br>
	<br>
	When you&apos;re done,<strong> you can export the nametable and attribute data and import them into your assembly file</strong> with the use of &quot;.incbin &quot;filename&quot;.</div>
<br>
Which explains why I hardly feel the need for such features, and brings an interesting question:<br>
<br>
<strong>How many NES homebrewers actually save a full nametable in the ROM for each background in the game?</strong><br>
<br>
I mean, in my ROMs <u>I describe the nametables, I don&apos;t save them Byte by Byte</u>.<br>
<br>
For instance, let say a game has the backgrounds sharing few identical lines. In this case I store a compressed array of bytes (fi. 32 00 for an empty line, if the whole 00 tile is &quot;transparent color&quot;) and give each line an ID number (fi. 00), then describe the background as a compressed array of 30 lines IDs (fi. 30 00 for an all empty background made of 30 all &quot;transparent color&quot; lines made each of 32 &quot;transparent color&quot; tiles). If instead the backgrounds share areas different than lines, then I code a compressing / decompressing routine handling these &quot;screen areas&quot; instead of lines. And so on. And this also for attributes, of course. This also because often little portions of the backgrounds change during game.<br>
<br>
I never find myself storing a whole nametable in a ROMs, and I never used in different games the same compressing / decompressing routine to describe backgrounds. I always adapt the compression method to the game structure and needs, with the goal of avoiding redundancy in the ROM and to save space. The method used depends on the game.<br>
<br>
<strong>@all </strong><br>
So now I wonder: it is this common, or it is just me to prefer store the backgrounds data in some fractioned and compressed way rather than have, for each single background, a full nametable of 960 Bytes + attributes Bytes?<br>
<br>
<u>I&apos;m really curious on the subject now!</u><br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>