<div class="mdl-card__title"><strong>LucasWeatherby</strong> posted on 
		
			
				
				Jan 3, 2013 at 11:45:05 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					After a very long hiatus, I am back again to take another stab at programming. I have control of the paddles and the collision detection working. I am really struggling here with drawing the score to the background. After my UpdateSprites routine I have:
<br>
<br>DrawScore:
<br>  
<br>  LDX #$01       
<br>  LDA palette, x        
<br>  STA $2007 
<br>  RTS
<br>
<br>
<br>where the palette looks like this:
<br>
<br>palette:
<br>  .db $00,$01,$02,$03,  $22,$36,$17,$0F,  $22,$30,$21,$0F,  $22,$27,$17,$0F   ;;background palette
<br>  .db $22,$1C,$15,$14,  $22,$02,$38,$3C,  $22,$1C,$15,$14,  $22,$02,$38,$3C   ;;sprite palette
<br>
<br>
<br>It draws the number 1 to the background like I wanted. (eventually ill add the logic for the score instead of statically loading it) but right now I am struggling with the location of the score. For some reason it ends up in the bottom left corner. I cant figure out how to specify the location of a tile for the background. In the previous tutorial, you could specify the background locations by how the palettes were arranged but it was like a one time load and it wasnt changing. This is why I am confused
				</div><div class="mdl-card--border"></div>