<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Apr 20, 2010 at 10:14:50 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I was planning ahead. As I had it before, I had to turn NMI off to load a room as it was extending well out of v-blank, and maybe into the next frame. This would cause the music to skip...maybe. I haven&apos;t got that far, but I think that it will work better without having to make the music wait for the room to load (and theoritically an entire new bank of CHR-RAM). <br><br>I tried it before, but couldn&apos;t get the scroll not to jump around when it skipped back to NMI in the middle of loading stuff. I saw MetalSlime&apos;s &quot;sleeping&quot; code in his sound NN tutorials and thought I&apos;d try it. It made the main code run once per frame and a simple BNE and a variable (loading-background-don&apos;t-fuck-with-the-PPU) made it run nice. It actually made the black flash when the PPU is turned off almost so fast you can&apos;t see it any more. I&apos;d imagine that is because before it would run into the next frame, than have a waitforvblank, then turn the graphics on, then continue on. Now it is only off for one frame. <img src="images/blank.gif" border="0" style="display: none;" original-src="/media/_images/expressions/face-icon-small-smile.gif"> <br><br>So far I like it. (And it forces me to seperate my &quot;do-shit&quot; code from my &quot;write to the background&quot; code.)
				</div><div class="mdl-card--border"></div>