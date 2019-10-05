<div class="mdl-card__title"><strong>Zzap</strong> posted on 
		
			
				
				Jun 30, 2008 at 11:01:13 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The buttons are determined in the set order you read from $4016. Each time you read from $4016 after latching the buttons, it will be for a different button. See below and add your own updates for the different buttons.
<br>
<br>  LDA $4016       ; player 1 - A
<br>  AND #%00000001
<br>  BNE NotA
<br>
<br>  ; do stuff for A button
<br>
<br>NotA:
<br>  LDA $4016       ; player 1 - B
<br>  AND #%00000001
<br>  BNE NotB
<br>
<br>  ; Do stuff for B button
<br>
<br>NotB:
<br>  LDA $4016       ; player 1 - Select
<br>  AND #%00000001
<br>  BNE NotSelect
<br>
<br>  ; Do stuff for Select button
<br>
<br>NotSelect:
<br>  LDA $4016     ; player 1 - Start
<br>  AND #%00000001
<br>  BNE NotStart
<br>
<br>  ; Stuff for Start button
<br>
<br>NotStart:
<br>  LDA $4016     ; player 1 - Up
<br>  AND #%00000001
<br>  BNE NotUp
<br>
<br>  ; Stuff for Up button
<br>
<br>NotUp:
<br>  LDA $4016     ; player 1 - Down
<br>  AND #%00000001
<br>  BNE NotDown
<br>
<br>  ; Stuff for Down button
<br>
<br>NotDown:
<br>  LDA $4016     ; player 1 - Left
<br>  AND #%00000001
<br>  BNE NotLeft
<br>
<br>  ; Stuff for Left button
<br>
<br>NotLeft:
<br>  LDA $4016     ; player 1 - Right
<br>  AND #%00000001
<br>  BNE NotRight
<br>
<br>  ; Stuff for Right button
<br>
<br>NotRight:
<br>
<br>
				</div><div class="mdl-card--border"></div>