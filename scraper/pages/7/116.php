<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Mar 3, 2012 at 3:53:11 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					No, you&apos;re right on.
<br>
<br>;;A Held? JSR Routine
<br>
<br>Routine:
<br>LDA Timer
<br>CMP #$30
<br>BCS .Shoot
<br>INC Timer
<br>RTS
<br>.Shoot:
<br>;;shoot code
<br>LDA #$00
<br>STA Timer
<br>RTS
				</div><div class="mdl-card--border"></div>