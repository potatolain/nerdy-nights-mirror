<div class="mdl-card__title"><strong>frantik</strong> posted on 
		
			
				
				May 7, 2009 at 8:24:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You only have to do that for mappers with &quot;bus conflicts&quot;.  You&apos;re writing to memory which is supposed to be Read Only (ROM).  Instead of writing, you actually cause the mapper to do things.  but mappers with bus conflicts get messed up if you don&apos;t write the same value which is contained in the ROM
				</div><div class="mdl-card--border"></div>