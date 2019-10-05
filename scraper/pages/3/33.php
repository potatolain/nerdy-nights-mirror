<div class="mdl-card__title"><strong>JohnB544</strong> posted on 
		
			
				
				Nov 12, 2009 at 6:57:36 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
  .bank 0 <br>
  .org $C000 <br>
;some code here
</div>
Is there any reason, that bank 0 is at memory location $C000, instead of $8000, where the cartige ROM starts?
<div class="FTQUOTE">
  .bank 2 <br>
  .org $0000 <br>
  .incbin &quot;mario.chr&quot;   ;includes 8KB graphics file from SMB1
</div>
$0000 is the internal RAM, but there is only 2KB of RAM, and bank 2 is 8KB. And what about the CHR RAM? The graphics shouldn&apos;t be there?
				</div><div class="mdl-card--border"></div>