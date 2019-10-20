<div class="mdl-card__title"><strong>Gauauu</strong> posted on 
		
			
				
				Sep 15, 2017 at 10:33:57 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>brilliancenp</b></i><br>
Its early so maybe this is a stupid question, what is MRN?</div>
<br>
A forum user named &quot;Mario&apos;s Right Nut&quot; -- he has <ins><a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=33287" target="_blank" original-href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=33287">this tutorial</a>.</ins><br>
<br>
&#xA0;
<div class="FTQUOTE" i>Originally posted by: <b>SoleGooseProductions</b><br>
You could set up a routine to check the player sprite against every other sprite, or a certain range of them</div>
The other thing I would recommend is, as much as possible, do your collision logic based on your logical game actors and not based on sprites or tiles themselves. (ie have a logical bounding box for your main character, and do collision tests based on that bounding box, and not based on the sprites that make up the character. ) This gives you more flexibility if you change how the character is represented in terms of sprites. Similarly with backgrounds -- check against whatever level of background element/metatile your game would find appropriate (ie often 16x16 pixel blocks like Mario), and don&apos;t actually check against each individual hardware-level tile.<br>
<br>
On that <ins><a href="http://higherorderfun.com/blog/2012/05/20/the-guide-to-implementing-2d-platformers/" target="_blank" original-href="http://higherorderfun.com/blog/2012/05/20/the-guide-to-implementing-2d-platformers/">guide to platformers</a></ins> page I linked to previously, there&apos;s a section about collisions with platforms that&apos;s worth reading.
				</div><div class="mdl-card--border"></div>