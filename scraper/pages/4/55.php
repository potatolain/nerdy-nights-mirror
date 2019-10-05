<div class="mdl-card__title"><strong>Samarth</strong> posted on 
		
			
				
				Feb 17, 2013 at 2:01:29 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					yup, i agree with that, but i am confused, about the use of storing that data into PPU ram, what happens of the stored data after $3F00? where are they loaded on screen? or where is the color seen on the screen? these colors are those which are included in background and sprites, but what is this data
<br>
<br>
<br>  .bank 1
<br>  .org $E000
<br>palette:
<br>  .db $0F,$31,$32,$33,$0F,$35,$36,$37,$0F,$39,$3A,$3B,$0F,$3D,$3E,$0F
<br>  .db $0F,$1C,$15,$14,$0F,$02,$38,$3C,$0F,$1C,$15,$14,$0F,$02,$38,$3C
<br>
<br>helping the sprite to color up?
<br>
<br>because the sprite data [in mario.chr] is
<br>
<br>0 0 0 0 0 0 1 1
<br>0 0 0 0 1 1 1 1 
<br>0 0 0 1 1 1 1 1 
<br>0 0 0 1 1 1 0 0 
<br>0 0 1 0 0 1 0 0
<br>0 0 1 0 0 1 1 0 
<br>0 1 1 0 0 1 1 0 
<br>
<br>0 0 0 0 0 0 0 0 
<br>0 0 0 0 0 0 0 0 
<br>0 0 0 0 0 0 0 0 
<br>0 0 0 0 0 0 0 0 
<br>0 0 0 1 1 1 1 1 
<br>0 0 1 1 1 1 1 1 
<br>0 0 1 1 1 1 1 1 
<br>0 1 1 1 1 1 1 1 
<br>
<br>in the first 16 bytes, now how does the color from the palettes gets filled in sprite?
<br>
<br>[question is - we have the shape of the sprite in mario.chr, and the colors in color palette, my question is how to choose color? ]
				</div><div class="mdl-card--border"></div>