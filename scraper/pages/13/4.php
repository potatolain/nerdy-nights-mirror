<div class="mdl-card__title"><strong>y(oYo)</strong> posted on 
		
			
				
				Oct 15, 2013 at 5:37:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					At this point, waiting for sprite 0 to be hit confuses me.<br>
<br>
When we get out of the loop that tests if sprite 0 have been hit, we are outside the vblank period, right ?<br>
<br>
<pre style="color: rgb(0, 0, 0); font-size: 11px;"><code>WaitSprite0:
  lda $2002
  and #%01000000
  beq WaitSprite0      ; wait until sprite 0 is hit</code></pre>
<br>
So, it is actually possible to do graphics update in real time, even if the ppu is rendering?<br>
Or maybe, at this exact moment, all we can do is only update Scroll registers?<br>
<br>
Any help or futher information would be very appreciated <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
Thanks a lot.
				</div><div class="mdl-card--border"></div>