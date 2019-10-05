<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Jan 31, 2012 at 10:03:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					This is probably a bad question at this point in the game, but I&apos;m having trouble figuring out how the background is becoming a bunch of zeroes. It appears that it is happening in this block of code:<br>
<br>
<br>
;;This is the PPU clean up section, so rendering the next frame starts properly.<br>
LDA #%10010000 ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
STA $2000<br>
LDA #%00011110 ; enable sprites, enable background, no clipping on left side<br>
STA $2001<br>
<br>
<br>
Though I&apos;m not sure why it is defaulting to those zeroes. Could someone shed some light on this?
				</div><div class="mdl-card--border"></div>