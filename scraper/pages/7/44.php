<div class="mdl-card__title"><strong>rizz</strong> posted on 
		
			
				
				Mar 2, 2010 at 5:55:30 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m trying to compile a list of the various IRQ&apos;s generated during game execution.  I haven&apos;t begun learning sound programming yet, so there might be various IRQ&apos;s in that section.
<br>
<br>This is what I know so far:
<br>SEI and CLI disables and enables ALL IRQ&apos;s
<br>frame counter IRQ&apos;s (see $4017)
<br>DMC IRQ&apos;s (see $4010)
<br>MMC3 IRQ&apos;s (see $C000, C001, E000, E001)
<br>using BRK will generate your own IRQ
<br>
<br>Which other things will trigger an IRQ?  When/how exactly is that DMC IRQ triggered?
<br>
<br>Thanks
				</div><div class="mdl-card--border"></div>