<div class="mdl-card__title"><strong>Piputkin3</strong> posted on 
		
			
				
				Apr 26, 2017 at 11:28:54 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Here:
<br>ButtonA:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BEQ ButtonB
<br>  LDA $0210
<br>  CLC
<br>  ADC #$01
<br>  STA $0210
<br>ButtonB:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BNE SelectButton
<br>  
<br>SelectButton:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BNE StartButton
<br> 
<br>StartButton:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BNE UpButton
<br> 
<br>UpButton:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BNE DownButton
<br>  LDA $0200
<br>  CMP #$DF
<br>  BEQ DownButton
<br>  LDA $0200
<br>  CLC
<br>  ADC #$01
<br>  STA $0200
<br> 
<br>DownButton:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BNE LeftButton
<br>  LDA $0200
<br>  CMP #$00
<br>  BEQ LeftButton
<br>  LDA $0200
<br>  SEC
<br>  SBC #$01
<br>  STA $0200
<br> 
<br>LeftButton:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BNE RightButton
<br>  LDA $0203
<br>  CMP #$F0
<br>  BEQ RightButton
<br>  LDA $0203
<br>  CLC
<br>  ADC #$01
<br>  STA $0203
<br>
<br> 
<br>RightButton:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BNE NotRightButton
<br>  LDA $0203
<br>  CMP #$00
<br>  BEQ NotRightButton
<br>  LDA $0203
<br>  SEC
<br>  SBC #$01
<br>  STA $0203
<br> 
<br>NotRightButton:
<br>  JMP Here
				</div><div class="mdl-card--border"></div>