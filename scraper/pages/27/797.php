<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				May 20, 2016 at 11:18:12 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					hmm, okay- the CHRAM is the part I&apos;m trying to understand, mostly. When you say &quot;reload the PPU with new graphics while the PPU is turned off&quot;, does that translate to NMI? and what do you mean by disabling the CPU? And how can you only swap a few tiles if your swapping whole banks? That&apos;s my main question.<br>
<br>
or, would this flow work in the NMI:<br>
<br>
draw black box at bottom of screen<br>
swap to bank with text CHR data<br>
draw text after swap<br>
swap back<br>
other updates, repeat on next NMI<br>
<br>
my question is, would swapping, drawing, and swapping back give me the effect I&apos;m looking for?<br>
<br>
EDIT: well, that didn&apos;t work. Found a thing on the programming resources page, I think... gonna check that out and figure out the CHR RAM nonsense
				</div><div class="mdl-card--border"></div>