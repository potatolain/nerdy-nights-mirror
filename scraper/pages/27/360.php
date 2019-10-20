<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 7, 2014 at 2:10:08 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					LDX #$00
<br>LDY #$00
<br>LDA $0201
<br>CHR_Loop:
<br>CLC
<br>STA $0201,x
<br>ADC #$01
<br>STA $0205,x
<br>ADC #$01
<br>STA $0209,x
<br>ADC #$01
<br>STA $020D,x
<br>ADC #$01
<br>STA $0211,x ;This assembles the CHR image (00,01,02,03,04,05,06,07 then 10,11,12,13,14,15,16,17 etc.)
<br>ADC #$01
<br>STA $0215,x
<br>ADC #$01
<br>STA $0219,x
<br>ADC #$01
<br>STA $021D,x
<br>
<br>This part looks weird to me.
				</div><div class="mdl-card--border"></div>