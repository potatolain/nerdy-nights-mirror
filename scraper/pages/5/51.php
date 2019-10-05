<div class="mdl-card__title"><strong>-Basti-</strong> posted on 
		
			
				
				Jun 4, 2010 at 2:59:38 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I think this is the important part of the code:<br>
  <br><br><br>  .bank 1<br>
  .org $E000<br>
palette:<br>
  .db $0F,$31,$32,$33,$34,$35,$36,$37,$38,$39,$3A,$3B,$3C,$3D,$3E,$0F<br>
  .db $0F,$29, $07, $36 <br>
  <br>
sprites:<br>
<br>
  ;------- Dragon--------<br>
  .db $10, $02, $00, $10 <br>
  .db $10, $03, $00, $18<br>
  .db $10, $04, $00, $1F ;<br>
  .db $18, $12, $00, $10<br>
  .db $18, $13, $00, $18<br>
  .db $18, $14, $00, $1F;<br>
  .db $1F, $22, $00, $10<br>
  .db $1F, $23, $00, $18<br>
  .db $1F, $24, $00, $1F<br>
  <br>
  <br>
  <br>
  .org $FFFA <br>    
  .dw NMI <br>       
   <br>                
  .dw RESET   <br>   
   <br>               
  .dw 0   <br>
				</div><div class="mdl-card--border"></div>