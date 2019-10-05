<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Oct 26, 2009 at 4:48:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Not sure what the issue you&apos;re having is, but try it this way.  
<br>  
<br>  LDA $0200       ; load sprite Y position
<br>  CLC             ; make sure the carry flag is clear
<br>  ADC #$02        ; A = A + 2
<br>  STA $0200       ; save sprite Y position
<br>  STA $0204
<br>  CLC
<br>  ADC #$08
<br>  STA $020C       
<br>  STA $0208       
<br>
<br>  LDA $0203       ; load sprite X position
<br>  STA $020B
<br>  CLC
<br>  ADC #$08
<br>  STA $0207
<br>  STA $020F
				</div><div class="mdl-card--border"></div>