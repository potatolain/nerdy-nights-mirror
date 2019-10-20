<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 22, 2015 at 12:29:29 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>FarruOne</b></i><br>
<br>
The problem lies in the NMI, the PPU or both.<br>
<br>
I have just tried a different appeoach and it works fine: I have kept the scrolling code in the NMI but it is branched by a variable flag enabled when the right button is pressed.<br>
<br>
Anyway, I should get more familiar with the NMI mechanism...<br>
Thank you!</div>
<br>
In case you did not read these two articles yet, give a look:<br>
<br>
&#xA0;<a href="http://wiki.nesdev.com/w/index.php/PPU_scrolling" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/PPU_scrolling">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
&#xA0;<a href="http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
they can probably help you out. Also, I know there is a buggy behaviour about writing values to $2005 in some scenarios, but I can&apos;t find where such behaviour is explained, and my English and tech language I fear it is not good enough to explain it myself. I&apos;m sure someone else will point out this issue if needed to have your code working correctly.<br>
<br>
<strong>Edit</strong>: correction.
				</div><div class="mdl-card--border"></div>