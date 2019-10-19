<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Sep 16, 2009 at 10:21:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					this is excellent. I actually think week 4 was the big step for me. This one kinda just built off of that one more. I don&apos;t understand everything in this one for sure, but I can definitely follow it enough to know what the sections of code are doing. It took me like 10 mins to add my old SFX into this engine and place the updated engine into my game. 
<br>
<br>I was was thinking about blank notes or breaks and wondering if the easiest way to do it would to be just add a word byte to the note_table.i call BK and have it with a value of $0000. then when writing a song with a rest or something would be like
<br>.byte D3,D4,BK,D4,D3,$FF
<br>
<br>I&apos;m learning a lot about pointers, lookup tables, and include from you which is just as useful as the music engine itself. I&apos;ve always been a bit better at hacking existing code, then designing. I much prefer seeing code in use, then trying to figure out how to design it. After seeing this, it will probably help me a ton on my next game with all kinds of loads. Right now I have seperate subroutines to load my backgrounds and each one of them has the same sets of loops to load the background tiles and attribute table. Now that I kinda see how these lookup tables work, I could cut a ton of code out and use a single loading loop and use a table to decide which backgound and attributes to load. 
<br>
<br>I tend to be able to always make things work, but I design poorly. These sound tutorials will make me much more efficient in the future.
				</div><div class="mdl-card--border"></div>