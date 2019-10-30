<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 18, 2010 at 12:02:50 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>albailey</b></i><br><br>        ; FINE X scrolling updates right away, but I do not care so long as the status bar color is the same all the way through nametable $2000 and $2400.  Otherwise I will see crawling.
<br>        LDA X_SCROLL
<br>        STA $2005 ; first write is X scrolling
<br>        LDA #$00
<br>        STA $2005 ; second write is Y scrolling
<br></div><br>What I have done is timed loops starting when the sprite 0 hit happens. &#xA0;If you can get your $2005 writes to happen at the end of the scanline, when the PPU is fetching sprite data, you won&apos;t see any graphical glitches. &#xA0;Sprite fetching is long enough to account for the variable width crawl.
				</div><div class="mdl-card--border"></div>