<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Nov 20, 2014 at 10:51:41 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Without looking at the actual code, I&apos;d say you have an error either in your bank selection routine or the config reg set up routine.  i.e. you have your CHR set to swap 8k chunks and you&apos;re trying to switch 4k chunks.  Or vice versa.  The emulator will sometimes ignore stuff and function with this error, but the hardware won&apos;t. Just check everything and make sure there&apos;s not an error.
				</div><div class="mdl-card--border"></div>