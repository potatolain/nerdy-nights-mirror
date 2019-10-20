<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Jul 2, 2014 at 8:35:48 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					EDIT: Apparently the problem is that NEStopia is retarded and thinks there is more than 8 sprites on the scanline (But there&apos;s only 8 of them). Do you know what causes this problem?<br>
<br>
Now I have another little problem with the program. It runs as it should in FCEUX (the pic is correctly displayed), but on NEStopia, there are some sprites missing for some reason (sprites 6, 7, 36 and 37).<br>
Here&apos;s the metasprite building SR<br>
<br>
Increase_Four: ;Increments X by four<br>
INX<br>
INX<br>
INX<br>
INX<br>
RTS<br>
<br>
Huge_Metasprite:<br>
LDX #$00<br>
LDY #$00<br>
LDA $0200 ;First the Y position of the sprites<br>
YPos_Loop:<br>
STA $0200,x<br>
STA $0204,x<br>
STA $0208,x<br>
STA $020C,x<br>
STA $0210,x ;64x64 metasprite<br>
STA $0214,x<br>
STA $0218,x<br>
STA $021C,x<br>
CLC<br>
ADC #$08<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four ;Kind of an overkill, but it increases the X reg by 32<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
INY<br>
CPY #$08<br>
BNE YPos_Loop ;8 loops of this, then we can proceed<br>
LDX #$00<br>
LDY #$00<br>
LDA $0203 ;And now we&apos;re doing the X position<br>
XPos_Loop:<br>
STA $0203,x<br>
STA $0223,x<br>
STA $0243,x<br>
STA $0263,x<br>
STA $0283,x ;Kind of the same thing, but this time, it&apos;s vertical<br>
STA $02A3,x<br>
STA $02C3,x<br>
STA $02E3,x<br>
CLC<br>
ADC #$08<br>
JSR Increase_Four ;This also means less subroutines<br>
INY<br>
CPY #$08<br>
BNE XPos_Loop<br>
LDX #$00<br>
LDY #$00<br>
LDA $0201<br>
CHR_Loop:<br>
CLC<br>
STA $0201,x<br>
ADC #$01<br>
STA $0205,x<br>
ADC #$01<br>
STA $0209,x<br>
ADC #$01<br>
STA $020D,x<br>
ADC #$01<br>
STA $0211,x ;This assembles the CHR image (00,01,02,03,04,05,06,07 then 10,11,12,13,14,15,16,17 etc.)<br>
ADC #$01<br>
STA $0215,x<br>
ADC #$01<br>
STA $0219,x<br>
ADC #$01<br>
STA $021D,x<br>
INY<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
JSR Increase_Four<br>
CLC<br>
ADC #$09<br>
CPY #$08<br>
BNE CHR_Loop<br>
LDX #$00<br>
LDA #$00<br>
AttriSpr_Loop:<br>
STA $0202,x<br>
JSR Increase_Four ;Only one attribute is used<br>
CPX #$02<br>
BNE AttriSpr_Loop<br>
<br>
RTS
				</div><div class="mdl-card--border"></div>