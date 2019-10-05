<div class="mdl-card__title"><strong>lazerbeat</strong> posted on 
		
			
				
				Oct 6, 2014 at 12:51:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Sorry for the huger necrobump but this seems like the best place for the question. I have been working through weeks 1 to 6 with asm6 without any major problem but I hit 2 with weeks 7.
<br>
<br>1 - When I try to compile pong1.asm I get the following error
<br>
<br>pong1.asm(401): Missing ENDE
<br>
<br>Line 401 refers to   
<br>
<br>.incbin &quot;mario.chr&quot;   ;includes 8KB graphics file from SMB1
<br>
<br>This hasnt been an issue in any of the other tutorials. I was wondering if anyone has any ideas?
<br>
<br>
<br>2 - ASM6 doesnt seem to have and rsset / .rs1 function I have been using enum / .dsb 1 instead. Is this ok?
<br>
<br>Thanks everyone!
<br>
<br>
<br>
<br>
<br>
<br>  .rsset $0000    ;put variables starting at 0
<br>
<br>  score1   .rs 1  ;put score for player 1 at $0000
<br>
<br>Secondly
				</div><div class="mdl-card--border"></div>