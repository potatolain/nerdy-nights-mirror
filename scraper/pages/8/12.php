<div class="mdl-card__title"><strong>frantik</strong> posted on 
		
			
				
				May 7, 2009 at 2:30:17 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					.db causes the bytes to be written at that point in the code. data doesn&apos;t automatically start at $8000 or anything.. even your program code won&apos;t start at $8000 unless you tell the assembler to do so with an org command.  (well the pointers won&apos;t start at $8000)
<br>
<br>you could do something like 
<br>
<br>LDA #$03
<br>STA Bankvalue + #$03
<br>
<br>if you knew you wanted to switch to bank 3.. but it&apos;s better to reuse the general bank switching function.. that way if you end up switching mappers you only ahve to change one area of code
				</div><div class="mdl-card--border"></div>