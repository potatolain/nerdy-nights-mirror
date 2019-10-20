<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 13 at 4:12:51 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I finally got the background to populate with the two loops, yay!! 
<br>
<br>But now I&apos;m chasing a random sprite.. I&apos;ve got a sprite at 0,0 of tile $00 of my 1st nametable. I&apos;ve commented out everything except the standard required stuff ( NMI/RTI, Infinite loop,.org, bank, clear memory, vblank waiting, etc.) 
<br>The only thing that makes it go away is commenting out the PPU control settings:
<br>
<br>...
<br>LDA #%10010000          ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1
<br>STA $2000          
<br>LDA #%00011110   ; enable sprites, enable background, no clipping on left side
<br>STA $2001
<br>...
<br>
<br>Is there a bug in my emulator (MESEN), or a bug in the code somehow? This only started after I changed my code around to match the week 8 nerdy nights format.
				</div><div class="mdl-card--border"></div>