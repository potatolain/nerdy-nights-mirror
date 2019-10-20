<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 20, 2016 at 3:31:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>RockyHardwood</b></i><br>
<br>
ahh okay!<br>
<br>
This helped close the gap for sure- so I&apos;d only really use the bank swapping if I Was getting into an egregious amount of information? I see in MRN&apos;s examples he uses NROM with CHR RAM to animate blocks- The reason it confused me mostly was because I was trying to think about how in EB zero, the text boxes pop up but the background never changes- using FCEUXD I saw that it just tends tend to switch out partial data quite a bit!<br>
<br>
Thank you very much for the help!</div>
Duck Tales 2 does this as well. They actually do it in small chunks so they don&apos;t have to turn the screen off.<br>
<br>
Not sure how others do it, but with text boxes, as far as not changing the background, set aside some space in RAM and keep a live copy of the current background. Then pull the data from RAM and write it back to the PPU in small chunks of tiles (1 line at a time).<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>