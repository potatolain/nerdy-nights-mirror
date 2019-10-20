<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Aug 30, 2013 at 5:17:14 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>NESHERO27</b></i><br>
	<br>
	In looking through some examples of games I have noticed that with the switch to more banks there is often also the inclusion of more &quot;reset vectors&quot; sections in the code at the end of some of the banks, but not others. Does anybody have any idea as to where or why to place them different places? Thanks.<br>
	<br>
	Oh, and in case &quot;reset vectors&quot; is not the right name, what I am talking about is this business:<br>
	<br>
	.org $FFFA ;first of the three vectors starts here<br>
	.dw NMI ;when an NMI happens (once per frame if enabled) the<br>
	;processor will jump to the label NMI:<br>
	.dw RESET ;when the processor first turns on or is reset, it will jump<br>
	;to the label RESET:<br>
	.dw 0 ;external interrupt IRQ is not used in this tutorial</div>
I think that is because they switch the PRG banks with the interrupt vectors in them, and they are always needed. How else would you get to your NMIs and your IRQs?<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>