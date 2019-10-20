<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Sep 3, 2017 at 10:00:54 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Greetings all,
<pre>I am putting together a quick reference page to program a simple NROM game.
It will need English proof reading of course, but before all, to be accurate.
So, I need confirms (or corrections) about logic and math to be correct here.
Each scanline is 341 PPU cycles, and each 3 PPU cycles is 1 CPU cycle.
The &quot;span&quot; between the start of two consecutive V-Blanks is 262 scanlines.
The &quot;span&quot; between the start of two consecutive V-Blanks is 29780.7 CPU cycles.
The &quot;span&quot; of each V-Blank period itself is 20 scanlines on NTSC machines.
The &quot;span&quot; between start and end of a single V-Blank period is 2273.3 CPU cycles.
DMA transfer takes 514 CPU cycles, reducing this &quot;span&quot; to 1759.3 CPU cycles.
Assuming that a simple routine setting up the PPU ports $2000 and $2001 and the
scrolling $2005 will take &quot;x&quot; further cycles, there are left 1759 - x CPU cycles.
That is the amount of cycles left to update palette, background tiles, attributes,
and whatever else must be done during V-Blank, before writing to $2000 and $2001.
Please consider this a generic reference page helping the development of a simple
NROM game on the NES, not an expert programmer reference guide. From experience
about what fits into V-Blank and what not, I *think* that my math should be, more
or less, close to correct, but it would be cool it this was confirmed or refined.
Thanks in advance to anyone can provide expert feedback on this subject.</pre>
Cheers.
				</div><div class="mdl-card--border"></div>