<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Jan 19, 2014 at 3:45:34 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Finally got a score system working. For now, it only increments by 25, but I added a little part that keeps track of an eventual Hi Score <span class="sprites_emoticons absmiddle" id="emo_tongue"></span><br>
Yes, it&apos;s from what I&apos;m trying to program, so there are some weird values that refer to the score sprites I&apos;ve used.<br>
<br>
UpdateScore:<br>
<br>
AddOnes:<br>
LDA score1 ; load the lowest digit of the number<br>
CLC<br>
ADC #$05 ; add new number, no carry<br>
STA score1<br>
STA $0285<br>
CMP #$2A ; check if digit went above 9. If accumulator &gt;= $0A, carry is set<br>
BCC AddTens ; if carry is clear, all done with ones digit<br>
; carry was set, so we need to handle wrapping<br>
LDA score1<br>
SEC<br>
SBC #$0A ; subtract off what doesnt fit in 1 digit<br>
STA score1<br>
STA $0285 ; then store the rest<br>
INC score10<br>
INC $0281 ; increment the tens digit<br>
AddTens:<br>
LDA score10 ; load the tens digit of the number<br>
CLC<br>
ADC #$02 ; add new number, no carry<br>
STA score10<br>
STA $0281<br>
CMP #$2A ; check if digit went above 9. If accumulator &gt;= $0A, carry is set<br>
BCC AddHundreds ; if carry is clear, all done with tens digit<br>
; carry was set, so we need to handle wrapping<br>
LDA score10<br>
SEC<br>
SBC #$0A ; subtract off what doesnt fit in 1 digit<br>
STA score10<br>
STA $0281 ; then store the rest<br>
INC score100<br>
INC $027D ; increment the hundreds digit<br>
AddHundreds:<br>
LDA score100 ; load the hundreds digit of the number<br>
CMP #$2A ; check if digit went above 9. If accumulator &gt;= $0A, carry is set<br>
BCC AddThousands ; if carry is clear, all done with ones digit<br>
; carry was set, so we need to handle wrapping<br>
LDA score100<br>
SEC<br>
SBC #$0A ; subtract off what doesnt fit in 1 digit<br>
STA score100<br>
STA $027D ; then store the rest<br>
INC score1000<br>
INC $0279 ; increment the thousands digit<br>
AddThousands:<br>
LDA score1000 ; load the thousands digit of the number<br>
CMP #$2A ; check if digit went above 9. If accumulator &gt;= $0A, carry is set<br>
BCC AddTThousands ; if carry is clear, all done with T digit<br>
; carry was set, so we need to handle wrapping<br>
LDA score1000<br>
SEC<br>
SBC #$0A ; subtract off what doesnt fit in 1 digit<br>
STA score1000<br>
STA $0279 ; then store the rest<br>
INC score10000<br>
INC $0275 ; increment the ten thousands digit<br>
AddTThousands:<br>
LDA score10000 ; load the ten thousands digit of the number<br>
CMP #$2A ; check if digit went above 9. If accumulator &gt;= $0A, carry is set<br>
BCC EndScore ; if carry is clear, all done with TT digit<br>
; carry was set, so we need to handle wrapping<br>
LDA score10000<br>
SEC<br>
SBC #$0A ; subtract off what doesnt fit in 1 digit<br>
STA score10000<br>
STA $0275 ; then store the rest<br>
INC score100000<br>
INC $0271 ; increment the Hundred Thousands digit<br>
EndScore:<br>
<br>
<br>
HiScoreCheck:<br>
LDA score100000<br>
CMP hiscore100000<br>
BEQ TenThousandsCheck<br>
BCS WriteHi<br>
JMP EndHi<br>
TenThousandsCheck:<br>
LDA score10000<br>
CMP hiscore10000<br>
BEQ ThousandsCheck<br>
BCS WriteHi<br>
JMP EndHi<br>
ThousandsCheck:<br>
LDA score1000<br>
CMP hiscore1000<br>
BEQ HundredsCheck<br>
BCS WriteHi<br>
JMP EndHi<br>
HundredsCheck:<br>
LDA score100<br>
CMP hiscore100<br>
BEQ TensCheck<br>
BCS WriteHi<br>
JMP EndHi<br>
TensCheck:<br>
LDA score10<br>
CMP hiscore10<br>
BEQ OnesCheck<br>
BCS WriteHi<br>
JMP EndHi<br>
OnesCheck:<br>
LDA score1<br>
CMP hiscore1<br>
BEQ EndHi<br>
BCS WriteHi<br>
JMP EndHi<br>
WriteHi:<br>
<br>
LDA $0285<br>
STA $02A5<br>
LDA $0281<br>
STA $02A1<br>
LDA $027D<br>
STA $029D<br>
LDA $0279<br>
STA $0299<br>
LDA $0275<br>
STA $0295<br>
LDA $0271<br>
STA $0291<br>
LDA $0285<br>
STA hiscore1<br>
LDA $0281<br>
STA hiscore10<br>
LDA $027D<br>
STA hiscore100<br>
LDA $0279<br>
STA hiscore1000<br>
LDA $0275<br>
STA hiscore10000<br>
LDA $0271<br>
STA hiscore100000<br>
EndHi:
				</div><div class="mdl-card--border"></div>