<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Aug 13, 2017 at 11:40:34 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yeah, if you&apos;re updating other stuff with it there&apos;s a higher possibility of the NMI ending too early.<br>
<br>
When it comes to partitioning between the main loop and the NMI, the general idea is to have all the logic taken care of in the main loop while the NMI handles the draws. for instance, the main loop would calculate&#xA0;<em>where&#xA0;</em>a sprite would be, and the NMI would just plug those values into the sprites. If you had, say, lots of different BG tile data to draw from, you could have the main loop figure out what tiles are needed where,fill up a draw buffer with the tiles to draw, and then the NMI could just spit out the buffer on its turn. that gives you a lot of time to put more tiles in where putting all the logic in the NMI would cut you short.&#xA0;
				</div><div class="mdl-card--border"></div>