<div class="mdl-card__title"><strong>Herbalist</strong> posted on 
		
			
				
				Feb 2, 2011 at 4:39:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I downloaded the attached background2.zip and I noticed that after the attribute line of code there is a previous line of sky data repeated.<br><br>I dont think it belongs does it?<br>Why is it there? Filler Data?<br>
<br><br>[ QUOTE ]<br><br>attribute:
<br>  .db %00000000, %00010000, %01010000, %00010000, %00000000, %00000000, %00000000, %00110000
<br>
<br>  .db $24,$24,$24,$24, $47,$47,$24,$24 ,$47,$47,$47,$47, $47,$47,$24,$24 ,$24,$24,$24,$24 ,$24,$24,$24,$24, $24,$24,$24,$24, $55,$56,$24,$24  ;;brick bottoms
<br>
<br>
<br>
<br>  .org $FFFA     ;first of the three vectors starts here
<br>  .dw NMI        ;when an NMI happens (once per frame if enabled) the 
<br>                   ;processor will jump to the label NMI:
<br>  .dw RESET      ;when the processor first turns on or is reset, it will jump
<br>                   ;to the label RESET:
<br>  .dw 0          ;external interrupt IRQ is not used in this tutorial
<br>  
<br>  
<br>[ END QUOTE ]<br><br><br>
				</div><div class="mdl-card--border"></div>