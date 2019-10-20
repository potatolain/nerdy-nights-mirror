<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Dec 12, 2017 at 9:49:01 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					ASL is essentially like multiplying by 2. .dw tables are 2 bytes per entry instead of 1 byte because they are addresses, $8540. So, if you are going after entry 3, its actually the 6th byte, so you must multiply by 2.<br><br>.dw entry1, entry2, entry3 ; in label format<br><br>.dw $853E, $853F, $8540 ; what it looks like to the cpu
				</div><div class="mdl-card--border"></div>