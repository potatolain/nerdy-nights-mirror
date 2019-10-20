<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				May 17, 2014 at 2:29:44 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have a little problem...<br>
I wanted to save some space on my title screen so I came up with this little routine. However, all it does is that it makes my background flash. Does anyone know what the problem is?<br>
<div text-align:>
	<br>
	<div>
		<span font-family:courier>LoadTitle:</span></div>
	<div>
		<span font-family:courier>&#xA0; LDA $2002</span></div>
	<div>
		<span font-family:courier>&#xA0; LDA #$20</span></div>
	<div>
		<span font-family:courier>&#xA0; STA $2006</span></div>
	<div>
		<span font-family:courier>&#xA0; LDA #$00</span></div>
	<div>
		<span font-family:courier>&#xA0; STA $2006<span class="Apple-tab-span"> </span>;Begins at $2000</span></div>
	<div>
		<span font-family:courier>&#xA0; LDX #$00</span></div>
	<div>
		<span font-family:courier>LoadTitleLoop:</span></div>
	<div>
		<span font-family:courier>&#xA0; LDA title,x &#xA0; &#xA0; &#xA0;<span class="Apple-tab-span"> </span>; load data from address (background + the value in x)</span></div>
	<div>
		<span font-family:courier>&#xA0; CMP #$FF<span class="Apple-tab-span"> </span>;Compares value to $FF, and if it is equal to FF, skip next branch</span></div>
	<div>
		<span font-family:courier>&#xA0; BNE Write_Title_Tile</span></div>
	<div>
		<span font-family:courier>&#xA0; INX</span></div>
	<div>
		<span font-family:courier>&#xA0; LDA title,x<span class="Apple-tab-span"> </span>;Takes value next to $FF and rams it in the variable title_black (a racist variable)</span></div>
	<div>
		<span font-family:courier>&#xA0; STA title_black</span></div>
	<div>
		<span font-family:courier>&#xA0; LDY #$00<span class="Apple-tab-span"> </span>;Prepares Y register</span></div>
	<div>
		<span font-family:courier>Black_Loop:</span></div>
	<div>
		<span font-family:courier>&#xA0; LDA #$00</span></div>
	<div>
		<span font-family:courier>&#xA0; STA $2007<span class="Apple-tab-span"> </span>;Puts a lot of black tiles on the screen (CHR+pallettes make them black)</span></div>
	<div>
		<span font-family:courier>&#xA0; INY<span class="Apple-tab-span"> </span>;Increments Y and then compares it to the title_black variable</span></div>
	<div>
		<span font-family:courier>&#xA0; CPY title_black</span></div>
	<div>
		<span font-family:courier>&#xA0; BNE Black_Loop<span class="Apple-tab-span"> </span>;If it&apos;s not equal, go back to Black_Loop</span></div>
	<div>
		<span font-family:courier>&#xA0; INX<span class="Apple-tab-span"> </span>;Increments X for it to be ready for the next tile, and goes back to LoadTitleLoop</span></div>
	<div>
		<span font-family:courier>&#xA0; JMP LoadTitleLoop</span></div>
	<div>
		<span font-family:courier>Write_Title_Tile:</span></div>
	<div>
		<span font-family:courier>&#xA0; STA $2007 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; write to PPU</span></div>
	<div>
		<span font-family:courier>&#xA0; INX &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; X = X + 1</span></div>
	<div>
		<span font-family:courier>&#xA0; CPX #$FA &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;; Compare X to hex $FA</span></div>
	<div>
		<span font-family:courier>&#xA0; BNE LoadTitleLoop<span class="Apple-tab-span"> </span>; Go back to LoadTitleLoop if it&apos;s not equal</span><br>
		<br>
		&#xA0;</div>
	<div>
		<span font-family:courier>title:</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $FF,$42,$1D,$0D,$19,$1C,$0F,$00,$00,$30,$31,$32,$33,$34,$35,$36</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $37,$FF,$03,$38,$39,$3A,$3B,$00,$12,$13,$01,$00,$40,$41,$42,$43</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $44,$45,$46,$47,$0B,$18,$0E,$48,$49,$4A,$4B,$FF,$31,$1A,$00,$1C</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $00,$0F,$00,$1D,$00,$0F,$00,$18,$00,$1E,$FF,$29</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $00,$1D,$3D,$4D,$3F,$3E,$3F,$4D,$3C,$3E,$3F,$4C,$4D,$3C,$00,$3E &#xA0;;; &#xA0;SFS Inscription! WEEEEEE</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $3F,$3D,$3D,$3D,$4D,$3F,$4C,$4D,$4C,$4D,$3C,$4D,$3C,$4D,$3F,$00 &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $00,$1F,$3D,$3D,$3D,$3D,$3C,$3D,$00,$3D,$3C,$00,$3D,$00,$00,$3D &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $3C,$3D,$3D,$3D,$3D,$3D,$00,$3D,$00,$3D,$00,$3D,$00,$3D,$3D,$00 &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $00,$1A,$3D,$3D,$3D,$4E,$3F,$4D,$3C,$3D,$00,$00,$3D,$00,$00,$4E &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $3F,$3D,$3D,$3D,$4D,$3D,$00,$3D,$00,$3D,$00,$4D,$3C,$4D,$4F,$00 &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $00,$0F,$3D,$3D,$3D,$3D,$3D,$3D,$00,$3D,$3D,$00,$3D,$00,$00,$3D &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $3D,$3D,$3D,$3D,$3D,$3D,$00,$3D,$00,$3D,$00,$3D,$00,$4D,$3F,$00 &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $00,$1C,$3D,$3D,$3D,$4E,$4F,$4C,$3C,$4E,$4F,$00,$3C,$00,$00,$4E &#xA0;;; &#xA0;</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $4F,$4E,$4C,$4F,$3C,$3C,$00,$3C,$00,$3C,$00,$4C,$3C,$3C,$3C,$FF &#xA0;;; &#xA0;Ends here <span class="sprites_emoticons absmiddle" id="emo_happy"></span></span></div>
	<div>
		<span font-family:courier>&#xA0; .db $4A,$02,$00,$1A,$16,$0B,$23,$0F,$1C,$00,$11,$0B,$17,$0F,$FF,$33</span></div>
	<div>
		<span font-family:courier>&#xA0; .db $03,$00,$1A,$16,$0B,$23,$0F,$1C,$00,$11,$0B,$17,$0F,$FF,$33</span></div>
</div>
<br>
				</div><div class="mdl-card--border"></div>