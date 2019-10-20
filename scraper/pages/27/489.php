<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jan 16, 2015 at 9:48:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
	<br>
	Bunnyboy did a tutorial on scrolling and the sprite 0 stuff. It&apos;s in Roth&apos;s organization thread.<br>
	<br>
	IIRC, to handle the four score, you just read the controller 1 and 2 ports a second time...so you&apos;d read them like 1, 2, 1, 2 and store the data you get in the controller variables for 1, 2, 3, 4. Then the controller variables run just like the others. Been a while since I messed with this though.</div>
<br>
The four score reads players 1 &amp; 3 from $4016 and 2 &amp; 4 from $4017. Also, I think you have to add some extra reads to determine if the switch is in 2 or 4 player mode on the four score. I think you end up reading each 24 times.<br>
<br>
Here is where I got my info when I was looking at the four score a few months ago.<br>
<br>
<a href="http://wiki.nesdev.com/w/index.php/Four_score" target="_blank">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
I thought I found someone&apos;s sample code a while back, but I can&apos;t seem to find it anymore. I shortly gave up on this and moved to my power pad project.<br>
<br>
				</div><div class="mdl-card--border"></div>