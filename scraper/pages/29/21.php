<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 15, 2010 at 10:15:06 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I would expect the apology to be for deleting all his posts, as they were far more detailed and helpful to corrections than the subsequent ones.  My bad mood is because that info was erased instead of actually read to make everything better.  Corrected tutorials lead to better programmers, while bad information lasts forever (see buggy GBAGuy tutorials).  I care about the quality of the materials linked to the name, not who generates it.
<br>
<br>iNES header - mirroring is completely ignored, so saying it should match isn&apos;t quite right.  Not sure its &quot;wrong&quot;, but that could (and has) caused people problems.  Claiming you are using four screen mirroring actually is wrong.  Your .inesmir would have to be 8 for the four screen bit to be set.
<br>
<br>Misspelled words are very important for anyone who does not have english as their first language.  Bite and byte are two completely different things, just like KB and Kb.  As groups like playpower.org introduce more second and third world users to the NES through cheap clones the wordings in tutorials will become more significant.  Of course &quot;so what&quot; is a valid excuse if this is only meant for a couple people  <img src="images/blank.gif" border="0" style="display: none;" original-src="/media/_images/expressions/face-icon-small-smile.gif">
<br>
<br>Bit 7 is the reset.  This is very important, like reading $2002 to reset the hi/lo latch.  It also changes registers to default settings, which could change your PRG banking layout immediately.  If your initMMC1Mapper code is in a bank other than the last 16KB it could be swapped away, crashing your code.
<br>
<br>Bits 6 and 5 do not exist, because it is only a 5 bit shift register inside the mapper.
<br>
<br>
				</div><div class="mdl-card--border"></div>