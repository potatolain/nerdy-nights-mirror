<div class="mdl-card__title"><strong>-Basti-</strong> posted on 
		
			
				
				Jun 4, 2010 at 3:26:11 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					LoadSprites:
<br>  LDX #$00             
<br>LoadSpritesLoop:
<br>  LDA sprites, x        
<br>  STA $0200, x         
<br>  INX                 
<br>  CPX #$20              
<br>  BNE LoadSpritesLoop
				</div><div class="mdl-card--border"></div>