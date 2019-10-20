<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Apr 22, 2014 at 12:48:03 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Moving forward and not understanding is why you don&apos;t get it.<br>
<br>
Just gonna point out a logical error too: You don&apos;t disable the PPU then not enable it. Unless you do it in the NMI, in which your engine should be constructed so that it handles that situation and doesn&apos;t turn on rendering during certain events like screen uploading. Your NMI might cause glitches if you don&apos;t remember that point. Disabling, then having an NMI happen when &quot;off&quot; in the middle of doing stuff will lead to nasty bugs, that sometimes may or may not be easy to find.
				</div><div class="mdl-card--border"></div>