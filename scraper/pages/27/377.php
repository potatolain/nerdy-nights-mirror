<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Aug 12, 2014 at 5:13:09 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I had to modify the sound engine pretty heavily to make it do all the stuff with the noise channel that I wanted, resting being one of those issues.  But you can make it support rests, VE, PE, etc. pretty easily.  Basically, just set it to run a different routine on the noise channel and change MetalSlime&apos;s routines around a bit to account for the difference in noise data vs. note data.  You can make some bad ass effects with PE on noise.  
<br>
<br>Specifically, you can disable the noise channel just like the others.  I just don&apos;t think that he made it that far before he stopped the tutorials.  Might be as simple as adding &quot;JSR se_check_rest&quot; to the end of the &quot;se_do_noise&quot; routine.  Can&apos;t remember exactly.
				</div><div class="mdl-card--border"></div>