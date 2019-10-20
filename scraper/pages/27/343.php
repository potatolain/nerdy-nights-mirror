<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jun 4, 2014 at 10:51:28 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m looking now at NN w6.<br>
<br>
<a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8172" target="_blank">http://www.nintendoage.com/forum/...</a><br>
<br>
&quot;Nametables<br>
Like the sprites, background images are made up from 8x8 pixel tiles.&#xA0; The screen video resolution is 32x30 tiles, or 256x240 pixels.<br>
<br>
First the screen is divided into a 32x32 pixel grid, or 4x4 tiles.&#xA0; Each byte in the attribute table sets the color group (0-3) in the background palette that will be used in that area.&#xA0; That 4x4 tile area is divided again into 4 2x2 tile grids.&quot;<br>
<br>
Cool. Clear. I guess at least.<br>
<br>
I wonder: it is possible to do this?<br>
(the choice of colors is horrible, sorry about that)
<ul>
	<li>
		The gray box in the middle is the only sprite, and doesn&apos;t move from there.</li>
</ul>
<img align alt border="0" hspace="4" src="images/missing/094A196F-951F-52C6-4F9BE6E9EC826B5E.png" vspace="4" original-src="http://nintendoagemedia.com/users/21264/photobucket/094A196F-951F-52C6-4F9BE6E9EC826B5E.png"><br>
<ul>
	<li>
		Going Left:</li>
</ul>
The colored 16 square sections are rotated like this.<br>
<img align alt border="0" hspace="4" src="images/missing/094A1B4D-B4BE-76EB-AA7DE27128653CA7.png" vspace="4" original-src="http://nintendoagemedia.com/users/21264/photobucket/094A1B4D-B4BE-76EB-AA7DE27128653CA7.png">
<ul>
	<li>
		Going Right:</li>
</ul>
The colored 16 square sections are rotated like this.<br>
<img align alt border="0" hspace="4" src="images/missing/094A1D30-0262-6829-315C9290EB42FFA1.png" vspace="4" original-src="http://nintendoagemedia.com/users/21264/photobucket/094A1D30-0262-6829-315C9290EB42FFA1.png"><br>
<ul>
	<li>
		Going Up:</li>
</ul>
Move forward, so the last colored row of 4 32x32 square sections disappear, while the top 3 rows (12 squares) goes down by one, and a new row of four appears on top.<br>
<br>
If you can give me a link to an example of code, that&apos;s fantastic. It doesn&apos;t matter if you have to switch NMI off (or whatever you guys call switching off the screen refresh for few draws to compute things and update the data to display on screen).<br>
<br>
If you can&apos;t give the example, that&apos;s fine: however, if you have time, just tell me if this is at least possible in theory, I&apos;ll work myself the way to do it.<br>
<br>
To whoever can help or give feedback on this,<br>
Thanks, appreciated.<br>
<br>
Cheers!<br>
<br>
edit: misspelling<br>
				</div><div class="mdl-card--border"></div>