<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Nov 7, 2014 at 4:42:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Shiru</b></i><br>
	<br>
	At the moment of the last $e000 write selected bank replaces current one immediately. So in 32K mode you either need to plan your code very carefully to not allow code execution to get into unexpected location after the switch, or, which is way more viable, use a &apos;trampoline&apos; (or &apos;far call&apos;<span class="sprites_emoticons absmiddle" id="emo_wink"></span> in the RAM. I.e. bankswitching subroutine stored in the RAM, and takes two input parameters - PRG bank number and new PC value after performing the jump/call.</div>
<br>
Thanks <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
				</div><div class="mdl-card--border"></div>