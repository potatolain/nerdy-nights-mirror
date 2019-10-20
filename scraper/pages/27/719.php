<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Dec 11, 2015 at 1:00:45 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Without seeing everything in the code and what&apos;s happening on real hardware, my first thoughts are that either your graphics pointer data is incorrect, you have something else in an interrupt that&apos;s messing with your $2006/$2007 stuff, or something like that.
<br>
<br>If it loads the initial graphics bank okay, your loading routine is probably fine.  If you load the initial graphics bank before you enable NMI, you probably have something in the interrupt re-setting where you are sending the graphics data during the CHR RAM loading when you load the second bank.  If you enable NMI before the first graphics bank loads and it gets input okay, you&apos;re problem is probably in your graphics addresses somewhere (graphicspointer, SourceLo, or something).
<br>
<br>My 0.02 from the code snip.  Hope it helps.
				</div><div class="mdl-card--border"></div>