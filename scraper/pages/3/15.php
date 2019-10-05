<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Jun 7, 2008 at 3:15:56 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>bubbahotep</b></i><br>
<br>In the vblankwait1: section
<br>What does BIT and BPL mean?
<br>
<br></div><div><br></div><div><br></div><div>If you are just getting started, then you can largely ignore those. &#xA0;They won&apos;t be useful until much later.
</div><div><br></div><div>The BIT instruction first does an AND with A and the memory location, then copies the resulting data bit 7 from A to the Negative (N) flag, and data bit 6 from A to the Overflow (V) flag. &#xA0;Everything else is left alone.</div><div><br></div><div>The BPL instruction is Branch if Positive. &#xA0;When the N flag is zero, the branch is taken. &#xA0;If the N flag is 1, the branch is not taken.</div><div><br></div><div>Combining those two in the loop is just the fastest way to wait until data bit 7 = 1. &#xA0;When D7 = 0, BIT sets N = 0, and the BPL branch is taken to repeat the loop. &#xA0;When D7 = 1, N = 1, and the loop ends.</div><div><br></div><div>A very good 6502 instruction reference is at&#xA0;<a href="http://www.obelisk.demon.co.uk/6502/reference.html" target="_blank">http://www.obelisk.demon.co.uk/65...</a> &#xA0;It has all the instructions with a quick description and how the flags are affected.</div>
				</div><div class="mdl-card--border"></div>