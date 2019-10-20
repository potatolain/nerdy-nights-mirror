<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jun 19, 2016 at 11:57:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi all,<br>
<br>
I have a <em>generic</em> (not specifically related nor limited only to these examples below) question for people with more experience than I have coding in assembly. I often find myself in a scenario where, wasting some ROM space in lookup tables, I can make the code way faster, clear to read (avoiding jumps to subroutines), and more unlikely to have logic flaws (assuming that the data in the lookup tables is correct, it can&apos;t be buggy). So, when a routine is often needed within a program, I pretty often reduce it to a lookup table, if this is easily possible. Also because more complex code wastes some space in more instructions anyways. In few words, I do the math myself, instead of relying on the processor to do it. It is this choice common in assembly, or it is basically a wrong way to code?<br>
<br>
Thanks to anyone can give an answer. <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
<br>
Example 1 (!pseudocode: for clearity no #$ on HEX numbers, .byte, ...):
<pre>;   00 01 02 03 04 05 06 07 08 09 0a 0b 0c 0d 0e 0f value in hex
 x4 00 04 08 0c 10 14 18 1c 20 24 28 2c 30 34 38 3c ; 00 to 0f
    40 44 48 4c 50 54 58 5c 60 64 68 6c 70 74 78 7c ; 10 to 1f
    80 84 88 8c 90 94 98 9c a0 a4 a8 ac b0 b4 b8 bc ; 20 to 2f
    c0 c4 c8 cc d0 d4 d8 dc e0 e4 e8 ec f0 f4 f8 fc ; 30 to 3f<br><br>; y = x * 4<br><br>ldy x4,x<br><br>; no need for txa asl a asl a tay, so the value in a is unchanged
; it takes only 4 or 5 cycles, the lookup table wastes 64Bytes</pre>
Example 2 (!pseudocode: for clearity no #$ on HEX numbers, .byte, ...):<br><br><pre>;   00 01 02 03 04 05 06 07 08 09 0a 0b 0c 0d 0e 0f value in hex
sqr 00 01 01 01 02 02 02 02 02 03 03 03 03 03 03 03 ; 00 to 0f
    04 04 04 04 04 04 04 04 04 05 05 05 05 05 05 05 ; 10 to 1f
    05 05 05 05 06 06 06 06 06 06 06 06 06 06 06 06 ; 20 to 2f
    06 07 07 07 07 07 07 07 07 07 07 07 07 07 07 07 ; 30 to 3f
    08 08 08 08 08 08 08 08 08 08 08 08 08 08 08 08 ; 40 to 4f
    08 09 09 09 09 09 09 09 09 09 09 09 09 09 09 09 ; 50 to 5f
    09 09 09 09 0a 0a 0a 0a 0a 0a 0a 0a 0a 0a 0a 0a ; 60 to 6f
    0a 0a 0a 0a 0a 0a 0a 0a 0a 0b 0b 0b 0b 0b 0b 0b ; 70 to 7f
    0b 0b 0b 0b 0b 0b 0b 0b 0b 0b 0b 0b 0b 0b 0b 0b ; 80 to 8f
    0c 0c 0c 0c 0c 0c 0c 0c 0c 0c 0c 0c 0c 0c 0c 0c ; 90 to 9f
    0c 0c 0c 0c 0c 0c 0c 0c 0c 0d 0d 0d 0d 0d 0d 0d ; a0 to af
    0d 0d 0d 0d 0d 0d 0d 0d 0d 0d 0d 0d 0d 0d 0d 0d ; b0 to bf
    0d 0d 0d 0d 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e ; c0 to cf
    0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e 0e ; d0 to df
    0e 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f ; e0 to ef
    0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f 0f ; f0 to ff<br><br>; a = square root of a<br><br>tax
lda sqr,x<br><br>; it takes only 6 or 7 cycles, the lookup table wastes 256Bytes
; routines for square roots are pretty long anyways</pre>
Then of course, if the square root of 16 bits numbers was needed, then it would be necessary to use something like this:<br><br><pre>           ; Example 5-14.  Simple 16-bit square root.
           ;
           ; Returns the 8-bit square root in $20 of the
           ; 16-bit number in $20 (low) and $21 (high). The
           ; remainder is in location $21.
           
           sqrt16  LDY #$01     ; lsby of first odd number = 1
                   STY $22
                   DEY
                   STY $23      ; msby of first odd number (sqrt = 0)
           again   SEC
                   LDA $20      ; save remainder in X register
                   TAX          ; subtract odd lo from integer lo
                   SBC $22
                   STA $20
                   LDA $21      ; subtract odd hi from integer hi
                   SBC $23
                   STA $21      ; is subtract result negative?
                   BCC nomore   ; no. increment square root
                   INY
                   LDA $22      ; calculate next odd number
                   ADC #$01
                   STA $22
                   BCC again
                   INC $23
                   JMP again
            nomore STY $20      ; all done, store square root
                   STX $21      ; and remainder
                   RTS</pre>
Source (with <em>really nice</em> explanation, reading advised!): <a href="http://www.dwheeler.com/6502/oneelkruns/asm1step.html" target="_blank">http://www.dwheeler.com/6502/onee...</a><br>
<br>
***<br>
<br>
Post #777! <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>
				</div><div class="mdl-card--border"></div>