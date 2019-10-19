<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Mar 31, 2014 at 5:18:28 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Questions in the code below. Actaully, more like clarification.
<br>
<br>Question(s) 1: In the line of &quot;LDA #HIGH(background)&quot;, can I assume that #HIGH and (background) is understood by the system? Did we tell the system to understand this in our code somewhere or does it just know? Is there a correct time to use #LOW(background) instead of #$00, or are they the same?
<br>
<br>Question 2: The brackets [] are confusing me around the pointerLo. Why does that pointer get brackets and pointerHi not? I keep reading the Indirect Indexed Mode, but I get more confused each time.
<br>
<br>  LDA #$00
<br>  STA pointerLo       ; put the low byte of the address of background into pointer
<br>  LDA #HIGH(background)
<br>  STA pointerHi       ; put the high byte of the address into pointer
<br>  
<br>  LDX #$00            ; start at pointer + 0
<br>  LDY #$00
<br>OutsideLoop:
<br>  
<br>InsideLoop:
<br>  LDA [pointerLo], y  ; copy one background byte from address in pointer plus Y
<br>  STA $2007           ; this runs 256 * 4 times
<br>  
<br>  INY                 ; inside loop counter
<br>  CPY #$00
<br>  BNE InsideLoop      ; run the inside loop 256 times before continuing down
<br>  
<br>  INC pointerHi       ; low byte went 0 to 256, so high byte needs to be changed now
<br>  
<br>  INX
<br>  CPX #$04
<br>  BNE OutsideLoop     ; run the outside loop 256 times before continuing down
				</div><div class="mdl-card--border"></div>