<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				May 26, 2014 at 1:45:51 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>bunnyboy</b></i><br>
	<br>
	The problem with the list of BEQ is each branch can only jump over a certain amount of code. So if your step1 is very long, the BEQ step2 might not reach. Instead you would have to do:<br>
	<br>
	&#xA0; LDA Timer<br>
	&#xA0; CMP #$30<br>
	&#xA0; BNE not30<br>
	&#xA0; jmp step1<br>
	not30:<br>
	&#xA0; CMP #$60<br>
	&#xA0; BNE not60<br>
	&#xA0; jmp step2<br>
	not60:<br>
	&#xA0; etc<br>
	<br>
	which is harder to read. Until you are ready for much more advanced stuff that is probably going to be the best way.</div>
<br>
<br>
For those of us who have been using this method for a long time, what is the next, more complicated, way to do it?<br>
				</div><div class="mdl-card--border"></div>