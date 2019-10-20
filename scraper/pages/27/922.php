<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Aug 26, 2017 at 1:51:10 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					so I&apos;m assuming you mean you have a variable two bytes big to hold an address like a pointer? then all you need to do is<br>
<br>
<br>
LDY #$00<br>
LDA [pointer], y<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>