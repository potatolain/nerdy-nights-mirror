<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jan 16, 2015 at 3:55:40 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Here are the executive summaries, with links to more info. &#xA0;Ask more specifics if needed!
<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
1. Scrolling<br>
I got advice here to start from an easy horizontal scrolling, so I decided to have long shaped tracks rather than squared shaped tracks. I mean, fi, to have tracks 1x4 screen rather than 2x2 screens. I know there is a nice page on nesdev wiki (IIRC) on how to do horizontal scrolling correctly, but I can&apos;t find it. Anyone can help?</div>
For horizontal scrolling, you will write columns of tiles in the off screen area and use $2005 to set the scroll point. &#xA0;Use a nametable viewer in emulator to watch a game like SMB to see the off screen data being written. &#xA0;<a href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=36958" target="_blank" original-href="http://www.nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=36958">http://www.nintendoage.com/forum/...</a><br>
<br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
2. Sprite 0 collision<br>
What is that exactly? Is there a page explaining it deeply?</div>
<br>
When a non-transparent pixel on the first sprite overlaps with a non-transparent pixel on the background, a PPU flag is set. &#xA0;Your code polls the flag to wait for that point of the screen to be drawn. &#xA0;Normally used for split screen scrolling without extra hardware, like SMB. &#xA0;<a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=36969" target="_blank" original-href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=36969">http://nintendoage.com/forum/mess...</a><br>
<br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>user</b></i><br>
<br>
3. Nes Four Score<br>
Is there a good page on what to do if I want the game to support the NES four score?</div>
Read $4016 8x to get controller 1 like normal. &#xA0;Then read 8x again to get controller 3. &#xA0;Then read 8x again to get the signature byte. &#xA0;If signature byte is not correct, then there is no Four Score or it is in the 2 player position, so ignore data for controller 3. &#xA0;Same for $4017 to get controllers 2 and 4. &#xA0;<a href="http://wiki.nesdev.com/w/index.php/Four_score" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/Four_score">http://wiki.nesdev.com/w/index.ph...</a>
				</div><div class="mdl-card--border"></div>