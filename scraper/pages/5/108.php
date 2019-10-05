<div class="mdl-card__title"><strong>jarrodparkes</strong> posted on 
		
			
				
				Oct 17, 2012 at 12:24:58 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					$E000 falls into the range of 32KB cartridge ROM. So are the .DB directives seen below &quot;storing&quot; those values beforehand, so that when the LoadPalette&apos;s label is hit it can retrieve those values?
<br>
<br>  .bank 1
<br>  .org $E000
<br>palette:
<br>  .db $0F,$31,$32,$33,$34,$35,$36,$37,$38,$39,$3A,$3B,$3C,$3D,$3E,$0F
<br>  .db $0F,$1C,$15,$14,$31,$02,$38,$3C,$0F,$1C,$15,$14,$31,$02,$38,$3C 
<br>
<br>
				</div><div class="mdl-card--border"></div>