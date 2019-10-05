<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Oct 12, 2013 at 8:40:31 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Three questions:<br>
1.What&apos;s so special about #$40?<br>
2.What is up with<br>
STA $0000, x<br>
STA $0100, x<br>
STA $0200, x<br>
STA $0400, x<br>
STA $0500, x<br>
STA $0600, x<br>
STA $0700, x<br>
LDA #$FE<br>
STA $0300, x<br>
I know it&apos;s about loading the value in the accumulator (#$00) to these addresses, but why do we have to do it?<br>
3.Why do we have to set up stack with TXS (which here means transfering hex value FF to register S) in the beginning?<br>
Thanks <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>