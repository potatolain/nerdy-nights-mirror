<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Dec 5, 2016 at 6:31:34 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I seem to be having some trouble with palette swapping...<br>
<br>
I&apos;m trying to set up a reliable scene switching system, but I&apos;ve run into an issue that appears to be a conflict between my palette flash (FlashStart) routine and my load palette (LoadPalettes) routine when switching from the title screen to the game screen.<br>
<br>
when you press start on the title screen, there appear to be certain times where the current color of the flashing text is preserved over the scene change. it assume it may have something to do with the frame count for the flash (PressStartFlashFrame) if nothing else, as it&apos;s never a consistent bug. you can usually get it at white if you press start as soon as the title comes up, and consistently green if you do it before.<br>
<br>
here&apos;s a link to the zip, if anyone wouldn&apos;t mind giving it a fresh set of eyes!<br>
<br>
EDIT: Nope, I&apos;m just an idiot. I was right about the frame count though, but only because I forgot to RTS the routine before the flash. &#xA0;nevermind!<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>