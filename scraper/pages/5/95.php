<div class="mdl-card__title"><strong>JC-Dragon</strong> posted on 
		
			
				
				Jun 30, 2012 at 9:45:28 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					alright, so I&apos;m back at the NN tutorials after a year of hiatus. Sadly most of my saved stuff from back then is gone so I&apos;ve started over. a lot of things make WAY more sense this time around but I have a question. why does this 
<br>ReadUp:	
<br>	LDA $4016     ; player 1 - Up
<br>	AND #%00000001
<br>	BEQ ReadUpDone
<br>	LDA $0203 ; load sprite 1 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $0203 ; save sprite 1 position
<br>	LDA $0207 ; load sprite 2 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $0207 ; save sprite 2 position
<br>	LDA $020B ; load sprite 3 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $020B ; save sprite 3 position
<br>	LDA $020F ; load sprite 4 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $020F ; save sprite 4 position 
<br>ReadUpDone:
<br>
<br>
<br>move it horizontally while this 
<br>
<br>ReadUp:	
<br>	LDA $4016     ; player 1 - Up
<br>	AND #%00000001
<br>	BEQ ReadUpDone
<br>	LDA $0200 ; load sprite 1 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $0200 ; save sprite 1 position
<br>	LDA $0204 ; load sprite 2 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $0204 ; save sprite 2 position
<br>	LDA $0208 ; load sprite 3 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $0208 ; save sprite 3 position
<br>	LDA $020C ; load sprite 4 position
<br>	SEC ; make sure carry flag is set
<br>	SBC #$01 ; A = A - 1
<br>	STA $020C ; save sprite 4 position 
<br>ReadUpDone:
<br>
<br>moves it vertically? 
<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>