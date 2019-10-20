<div class="mdl-card__title"><strong>Saintkat</strong> posted on 
		
			
				
				May 4, 2014 at 1:01:50 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;ve tried that but perhaps I am going around it the wrong way?  Or maybe I just don&apos;t know how to effectively read the debugger.
<br>
<br>If I put in the conditional for address $23CC, A == #00, it&apos;ll snap and I&apos;ll have this read out:
<br>
<br> 00:F1BB:8D 00 20  STA $2000 = #$10
<br> 00:F1BE:A9 20     LDA #$20
<br> 00:F1C0:8D 06 20  STA $2006 = #$CC
<br> 00:F1C3:A9 00     LDA #$00
<br> 00:F1C5:8D 06 20  STA $2006 = #$CC
<br> 00:F1C8:A2 04     LDX #$04
<br> 00:F1CA:A0 00     LDY #$00
<br> 00:F1CC:A9 24     LDA #$24
<br> 00:F1CE:8D 07 20  STA $2007 = #$00
<br> 00:F1D1:88        DEY
<br> 00:F1D2<span class="sprites_emoticons absmiddle" id="emo_happy"></span>0 FA     BNE $F1CE
<br> 00:F1D4:CA        DEX
<br> 00:F1D5<span class="sprites_emoticons absmiddle" id="emo_happy"></span>0 F7     BNE $F1CE
<br> 00:F1D7:A9 23     LDA #$23
<br> 00:F1D9:8D 06 20  STA $2006 = #$CC
<br> 00:F1DC:A9 C0     LDA #$C0
<br> 00:F1DE:8D 06 20  STA $2006 = #$CC
<br> 00:F1E1:A0 40     LDY #$40
<br> 00:F1E3:A9 00     LDA #$00
<br>&gt;00:F1E5:8D 07 20  STA $2007 = #$00
<br> 00:F1E8:88        DEY
<br> 00:F1E9<span class="sprites_emoticons absmiddle" id="emo_happy"></span>0 FA     BNE $F1E5
<br> 00:F1EB:60        RTS -----------------------------------------
<br> 00:F1EC:8D 06 20  STA $2006 = #$CC
<br> 00:F1EF:C8        INY
<br> 00:F1F0:B1 00     LDA ($00),Y @ $0336 = #$B3
<br> 00:F1F2:8D 06 20  STA $2006 = #$CC
<br> 00:F1F5:C8        INY
<br> 00:F1F6:B1 00     LDA ($00),Y @ $0336 = #$B3
				</div><div class="mdl-card--border"></div>