<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				May 8, 2010 at 9:33:44 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>DoctorMikeReddy</b></i><br><br>Doh! Reread it. That&apos;s what the latch is for. So, if I let go it won&apos;t matter as the bit will already be set and I won&apos;t lose the fact that a button was pressed. However, if you are familiar with real sized projects, just how often can this call be made to the controller, given a typical load of other code? That is, what is a likely frequency of checking the controller status per second?</div><br>Most (probably ~all) games check the controller once per frame, so 60Hz on NTSC, 50Hz on PAL. Well, actually games that use DPCM check it multiple times per frame because NTSC CPU has a bug where it will corrupt the controller bits sometimes when DPCM samples are playing.<br><br>
				</div><div class="mdl-card--border"></div>