<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Feb 12, 2014 at 5:19:41 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks! This one seems fairly simple, here&apos;s what I understand about it. Keep in mind that I&apos;m a beginner at 6502 ASM, as I just finished the Nerdy Nights.
<br>getrandom:
<br>
<br>         lda random+1  ;Loads random into the accumulator (Don&apos;t have a clue about the +1 though)
<br>         sta temp1  ;Stores random+1 to temp1
<br>         lda random  ;Loads Random without the +1
<br>         asl a  ;Shifts the value (random divided by two) in the accu to the left, sticks byte 0 in the carry flag
<br>         rol temp1  ;ROLs (Rotate left, multiplies by two) temp1, which is random+1
<br>         asl a  ;Do what you already did to the value in the accu a second time
<br>         rol temp1  ;Same for temp1
<br>         clc  ;Clear the Carry flag
<br>         adc random  ;Then add random to the accumulator
<br>         pha  ;vectrex280996.exe encountered an unknown opcode and stopped running. What I understand is that this makes a copy of the accu to the stack according to <a href="http://www.obelisk.demon.co.uk/6502/reference.html#PHA" target="_blank">http://www.obelisk.demon.co.uk/65...</a>
<br>         lda temp1  ;Loads temp1 to the accu
<br>         adc random+1  ;Adds random+1 to accu
<br>         sta random+1  ;Then stores this to random+1
<br>         pla  ;What does this opcode do? According to <a href="http://www.obelisk.demon.co.uk/6502/reference.html#PLA" target="_blank">http://www.obelisk.demon.co.uk/65...</a>, it takes the value you put in the stack before and sticks it in the accumulator
<br>         adc #$11  ;Add #$11 (Decimal 17) to what is in the accu (don&apos;t really know what&apos;s in the accumulator due to pla)
<br>         sta random  ;Store it in random
<br>         lda random+1  ;Loads random+1 in the accu
<br>         adc #$36  ;Add hex value 36 (Decimal 54 to the accumulator
<br>         sta random+1  ;Then stores it to random+1
<br>
<br>         rts
<br>
<br>temp1:   
<br>  .byte $5a
<br>random:  
<br>  .byte %10011101,%01011011
<br>
<br>
<br>A few questions now.
<br>1.What is the +1 for?
<br>2.What do PLA and PHA really do?
<br>3.What is .byte for?
<br>4.How can I use this subroutine when I want a random value in my game?
				</div><div class="mdl-card--border"></div>