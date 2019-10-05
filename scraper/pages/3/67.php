<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				Oct 12, 2013 at 1:26:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Setting up stack pointer is not really needed if you don&apos;t plan to use the stack page ($100..1ff) for anything else. But if you place something else there, you have to set up stack pointer to be sure the stack is always in the same place and does not overlap your other data.
				</div><div class="mdl-card--border"></div>