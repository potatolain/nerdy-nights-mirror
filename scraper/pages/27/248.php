<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Apr 26, 2014 at 11:40:32 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					In this case, there is no reliable way to detect emulators in general. The whole idea of emulators is to recreate a system as closely as possible, so in an ideal emulator there are no chances of detection at all, it should be 100% identical to the original. As emulators aren&apos;t 100% exact just yet (but close enough), you can detect flaws in certain emulators, or tricky things that aren&apos;t emulated properly so far. There are chances of false detections as well.
<br>
<br>One way to provide reliable detection is to introduce virtual register in every emulator, which is not exist on the original hardware, and reading it will always provide clear answer is it emulator or not.
				</div><div class="mdl-card--border"></div>