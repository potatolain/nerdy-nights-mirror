<div class="mdl-card__title"><strong>albailey</strong> posted on 
		
			
				
				May 20, 2010 at 3:22:55 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>bunnyboy</b></i><br><br><div class="FTQUOTE"><i>Originally posted by: <b>albailey</b></i><br><br>        ; FINE X scrolling updates right away, but I do not care so long as the status bar color is the same all the way through nametable $2000 and $2400.  Otherwise I will see crawling.
<br>        LDA X_SCROLL
<br>        STA $2005 ; first write is X scrolling
<br>        LDA #$00
<br>        STA $2005 ; second write is Y scrolling
<br></div><br>What I have done is timed loops starting when the sprite 0 hit happens. &#xA0;If you can get your $2005 writes to happen at the end of the scanline, when the PPU is fetching sprite data, you won&apos;t see any graphical glitches. &#xA0;Sprite fetching is long enough to account for the variable width crawl.</div><br><div>One other observation about crawling, but not directly pertaining to &quot;fine X&quot; scrolling.
</div><div><br></div><div>I had a bug a while back where I was using a status area at the bottom of the screen, and was placing the sprite zero on the top row of that status area (around row 22).</div><div><br></div><div>My bug was that because I placed the sprite zero in the status area, a portion of that status area would scroll as part of the game scrolling region. This was noticeable because I made the status region not run the entire width of the screen. &#xA0;This meant I had not used a solid line at the top of my status area, and I could visually see it moving across the screen.&#xA0;</div><div><br></div><div>The bug was actually more serious than just a graphical glitch, because the crawling meant that when an all transparent background &#xA0;tile scrolled to the location of the sprite zero, I did not get my sprite zero collision, and therefore my NMI routine never returned properly, etc..</div><div><br></div><div>I would not have had this problem with a status region at the top of the screen, because the only &quot;crawling&quot; that would be seen is the fine X scroll that Brian alluded to in his post.</div><div><br></div><div>A possible work around would have been to locate sprite zero above the status area, but in my opinion that can also lead to trouble, since you need to remember to make sure you do not have fully transparent background blocks in the game area for that row, otherwise you can hit the same problem.</div><div><br></div><div>So in summary, if you are going to put a status area on the bottom of your screen, make sure you load it into both $2000 and $2400 nametables, and make sure that at least the top line of the status region runs continuously the entire width.&#xA0;</div><div><br></div><div>Al</div><div><br></div>
				</div><div class="mdl-card--border"></div>