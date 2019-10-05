<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Mar 2, 2012 at 11:42:05 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					1:<br>
LDX #$00<br>
Loop:<br>
LDA #$FF<br>
STA $0300,x (or wherever your sprites are)<br>
INX<br>
CPX #$FF (or however many sprites you&apos;re using)<br>
BNE Loop<br>
RTS<br>
<br>
2. Just create a flag in the zero page and set it to 1 when a button is pressed. If the flag is still 1, skip the controller reading routine. When you release the button, set the flag to 0.
				</div><div class="mdl-card--border"></div>