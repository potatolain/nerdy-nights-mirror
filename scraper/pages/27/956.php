<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Oct 13, 2017 at 10:58:07 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Gauauu</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>brilliancenp</b></i><br>
Its early so maybe this is a stupid question, what is MRN?</div>
<br>
A forum user named &quot;Mario&apos;s Right Nut&quot; -- he has <ins><a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=33287" target="_blank">this tutorial</a>.</ins><br>
<br>
&#xA0;
<div class="FTQUOTE" i>Originally posted by: <b>SoleGooseProductions</b><br>
You could set up a routine to check the player sprite against every other sprite, or a certain range of them</div>
The other thing I would recommend is, as much as possible, do your collision logic based on your logical game actors and not based on sprites or tiles themselves. (ie have a logical bounding box for your main character, and do collision tests based on that bounding box, and not based on the sprites that make up the character. ) This gives you more flexibility if you change how the character is represented in terms of sprites. Similarly with backgrounds -- check against whatever level of background element/metatile your game would find appropriate (ie often 16x16 pixel blocks like Mario), and don&apos;t actually check against each individual hardware-level tile.<br>
<br>
On that <ins><a href="http://higherorderfun.com/blog/2012/05/20/the-guide-to-implementing-2d-platformers/" target="_blank">guide to platformers</a></ins> page I linked to previously, there&apos;s a section about collisions with platforms that&apos;s worth reading.</div>
Well it has taken about a month but I finally have my code working in line with MRN&apos;s tutorials. &#xA0;I cant believe how much easier my code is to read and go through. &#xA0;Much appreciated to everyone for the help. &#xA0;I have made my way up to bounding boxes which is going to take some time. &#xA0;The concept seems easy enough but putting it into action and actually understanding what it is doing is taking some time. &#xA0;I am really trying to understand everything rather than just copy and paste and hope it works lol. &#xA0;Debugging is getting easier for me as well. &#xA0;I am so used to being able to step through the code with all my other development stuff. Had to think back to how I used to do things before that. &#xA0;So by using the hex editor and some debug hex variables I am getting the hang of it. &#xA0;Thanks again!<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>