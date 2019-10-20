<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				May 25, 2014 at 12:24:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Quiet, zapper and rob work by flashing colors to signal when something is happening. You probably overwrote something important to this function. 
<br>
<br>Solegoose, it sounds like you didn&apos;t reset a timer or something. Just a frame counter that resets Everytime it reloads a screen should work. Just be sure to reset the counter before you load the screen or make the load routine aware that it is loading. I.e. Don&apos;t let the counter hit zero, start a screen load (which could take more than one frame), trigger a reload before the screen is finished reloading and the counter is reset, etc. 
<br>
<br>I usually just turn off the background and tell the program to skip the nmi graphics updates when I&apos;m loading a routine that&apos;s long like that. Should function the same as switching with a character, just uses a timer.
				</div><div class="mdl-card--border"></div>