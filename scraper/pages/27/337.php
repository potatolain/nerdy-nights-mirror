<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jun 2, 2014 at 6:36:02 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Never mind. The answer was in the next week (week 4) of the tutorial.<br>
<a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=6082" target="_blank">http://nintendoage.com/forum/mess...</a>
<pre><strong>  .bank 1
  .org $E000</strong>
palette:
  .db $0F,$31,$32,$33,$0F,$35,$36,$37,$0F,$39,$3A,$3B,$0F,$3D,$3E,$0F
  .db $0F,$1C,$15,$14,$0F,$02,$38,$3C,$0F,$1C,$15,$14,$0F,$02,$38,$3C
<strong>  .org $FFFA</strong>     ;first of the three vectors starts here
  .dw NMI        ;when an NMI happens (once per frame if enabled) the
                   ;processor will jump to the label NMI:
  .dw RESET      ;when the processor first turns on or is reset, it will jump
                   ;to the label RESET:
  .dw 0          ;external interrupt IRQ is not used in this tutorial</pre>
It is clear now. Thanks for the help. I thought it was wiser to don&apos;t go ahead in the tutorial before understanding everything, but probably I should do so before asking something already covered in the next week.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>