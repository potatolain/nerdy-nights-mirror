<div class="mdl-card__title"><strong>jarrodparkes</strong> posted on 
		
			
				
				Oct 17, 2012 at 9:13:30 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I can&apos;t get next to a debugger at the moment, but I hoped this question might have a quick answer.<br>
<br>
If directives like the following are handled first by the assembler like &quot;C pre-processor directives&quot;, then will each piece of data be stored off in memory prior to the first line of opcode being executed? Additionally, if that is the case, wouldn&apos;t the assembler be generating similar machine code to handle the initial storage of data in .db directives? If so, is there ever a need to worry about the time taken for those operations?<br>
<br>
sprites:<br>
;vert tile attr horiz<br>
.db $80, $32, $00, $80 ;sprite 0<br>
.db $80, $33, $00, $88 ;sprite 1<br>
.db $88, $34, $00, $80 ;sprite 2<br>
.db $88, $35, $00, $88 ;sprite 3
				</div><div class="mdl-card--border"></div>