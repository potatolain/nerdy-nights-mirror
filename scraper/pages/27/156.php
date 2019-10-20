<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 12, 2014 at 8:22:06 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Vectrex280996</b></i><br>
	<br>
	Thanks! This one seems fairly simple, here&apos;s what I understand about it. Keep in mind that I&apos;m a beginner at 6502 ASM, as I just finished the Nerdy Nights.<br>
	getrandom:<br>
	<br>
	lda random+1 ;Loads random into the accumulator (Don&apos;t have a clue about the +1 though)<br>
	sta temp1 ;Stores random+1 to temp1<br>
	lda random ;Loads Random without the +1<br>
	asl a ;Shifts the value (random divided by two) in the accu to the left, sticks byte 0 in the carry flag<br>
	rol temp1 ;ROLs (Rotate left, multiplies by two) temp1, which is random+1<br>
	asl a ;Do what you already did to the value in the accu a second time<br>
	rol temp1 ;Same for temp1<br>
	clc ;Clear the Carry flag<br>
	adc random ;Then add random to the accumulator<br>
	pha ;vectrex280996.exe encountered an unknown opcode and stopped running. What I understand is that this makes a copy of the accu to the stack according to <a href="http://www.obelisk.demon.co.uk/6502/reference.html#PHA" target="_blank">http://www.obelisk.demon.co.uk/6502/reference.html#PHA</a><br>
	lda temp1 ;Loads temp1 to the accu<br>
	adc random+1 ;Adds random+1 to accu<br>
	sta random+1 ;Then stores this to random+1<br>
	pla ;What does this opcode do? According to <a href="http://www.obelisk.demon.co.uk/6502/reference.html#PLA" target="_blank">http://www.obelisk.demon.co.uk/6502/reference.html#PLA</a>, it takes the value you put in the stack before and sticks it in the accumulator<br>
	adc #$11 ;Add #$11 (Decimal 17) to what is in the accu (don&apos;t really know what&apos;s in the accumulator due to pla)<br>
	sta random ;Store it in random<br>
	lda random+1 ;Loads random+1 in the accu<br>
	adc #$36 ;Add hex value 36 (Decimal 54 to the accumulator<br>
	sta random+1 ;Then stores it to random+1<br>
	<br>
	rts<br>
	<br>
	temp1:<br>
	.byte $5a<br>
	random:<br>
	.byte %10011101,%01011011<br>
	<br>
	<br>
	A few questions now.<br>
	1.What is the +1 for?<br>
	2.What do PLA and PHA really do?<br>
	3.What is .byte for?<br>
	4.How can I use this subroutine when I want a random value in my game?</div>
<br>
thumbs up for the site thefox mentioned, I got a psrng from there as well, haha.<br>
<br>
1. The +1 accesses one byte past what the address &quot;random&quot; points to. &quot;random&quot; is an address, which is basically an index into a huge list of &quot;bytes&quot;. Bytes can be thought of as a number from 0 to 255. You can look up 65536 bytes all in a row, numbered from 0 to 65535, using the 6502&apos;s 16 bit addressing system. Some of these bytes are mapped to RAM, others to permanent ROM, and still others to registers that control what the NES&apos;s graphics, sound and input hardware do.<br>
<br>
2. pha and pla push to and pull from the stack, respectively. Basically it literally takes whatever is in the accumulator and literally puts it on a stack. The only rule is, the last thing you put in (pha) is the first thing you will pull out (pla). It&apos;s most common use is when calling subroutines, with jsr. The cpu automatically uses the stack, with that, though, you don&apos;t need pha and pla for calling a routine (you do need rts though). &#xA0;It&apos;s very useful for preserving local state when you need to jump to a routine that may clobber a part of RAM you were using before you called said routine. Typically one wants to avoid that but used judiciously it can be very convenient.<br>
<br>
3. .byte tells the assembler to just spit out a byte into the ROM. This is a bit hard to explain. When you first start out you will see .res 1 &#xA0;in some places and .byte $00 in others and wonder what the real difference is. Basically, .res will not actually output a byte. It just means<br>
<br>
random: .res 1<br>
<br>
Will point to a location in memory. You won&apos;t typically see .res anywhere but ZP or RAM on the NES, because its for reading/writing variables.<br>
<br>
.byte $00 will actually put the value &quot;0&quot; permanently into your rom. So if you&apos;re storing data such as a metasprite, a coordinate, some other value for whatever you&apos;re doing in your engine, and you want it to be PERMANENT, you use .byte. (or .word, or a host of other directives that some assemblers offer)<br>
<br>
Using a prng is fairly easy. Just call it to let it permute the current value of random (and random+1...looks like this one works with a 16 bit value), and then transform that value into something usable like a coordinate, a speed, or whatever else you may need it for. It&apos;s often possible to get better results from prngs by throwing more chaos into it drawn from parts of your engine, such as the player&apos;s coordinates (a human can add a lot of randomness to a game).<br>
<br>
Hope that helps a little!
				</div><div class="mdl-card--border"></div>