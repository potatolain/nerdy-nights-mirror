<div class="mdl-card__title"><strong>-Basti-</strong> posted on 
		
			
				
				Jun 7, 2010 at 2:32:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I use the technique which is shown in NN 5, I think that&#xB4;s moving each sprite individually.
<br>Here&#xB4;s my code
<br>
<br>ReadLeft: 
<br>  LDA $4016       ; player 1 - Left
<br>  AND #%00000001  ; only look at bit 0
<br>  BEQ ReadLeftDone   ; branch to ReadBDone if button is NOT pressed (0)
<br>                  ; add instructions here to do something when button IS pressed (1)
<br>  LDA $0203       ; load sprite X position
<br>  SEC             ; make sure carry flag is set
<br>  SBC #$01        ; A = A - 1
<br>  STA $0203       ; save sprite X position
<br>  STA $020F       ; save sprite X position
<br>  STA $021B 
<br>  CLC
<br>  ADC #$08
<br>  STA $0207
<br>  STA $0213
<br>  STA $021F
<br>  CLC
<br>  ADC #$08
<br>  STA $020B
<br>  STA $0217
<br>  STA $2022
<br>
				</div><div class="mdl-card--border"></div>