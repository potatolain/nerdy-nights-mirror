<div class="mdl-card__title"><strong>UrchlayUrchlay</strong> posted on March 9, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253327" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p>Assembly:</p>
<p></p>
<pre class="ipsCode">;--count set bits in v
;  trashes v, accumulator, result is in c

  lda #0
  sta c
Loop
  lda v
  beq Done
  inc c
  dec v
  and v
  sta v
  bne Loop
Done</pre>
<div></div>
<p></p>
<p>Seems like that should be improveable.</p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>I&apos;ll take a stab at it...</p>
<p>&#xA0;</p>
<p>Execution time for your version is 11 cycles if v is 0, or 5+n*23-1 cycles if v is not zero (where n is the number of bits set in v). Average time (4 bits set in input) is 96 cycles.</p>
<p>&#xA0;</p>
<p>One obvious improvement would be to use the X register instead of memory location c. Use &quot;ldx #0&quot; to initialize (saves 3 cycles, assuming &quot;c&quot; was a zero page address), and &quot;inx&quot; instead of &quot;inc c&quot; (saves 3 cycles per set bit in v). Also the code gets 2 bytes smaller. Of course, if you already had written a lot of code that used this as a subroutine, all that code would have to change (to look for the result in X instead of c). Depending on how the calling code used the result, you might end up losing a lot more than the 2 bytes you&apos;ve saved.</p>
<p>&#xA0;</p>
<p>Another improvement would be to move the Loop label down two lines (below the &quot;beq Done&quot;)... You only need to do &quot;lda v : beq Done&quot; once, before the first loop iteration (to catch the special case where the initial value of v is zero). At the end of the loop, you&apos;re making this check again (the &quot;bne Loop&quot;)... if this branch is taken (back to Loop), it&apos;s redundant to check v for zero again (you&apos;re guaranteed it&apos;s not, since you just took the &quot;bne Loop&quot; branch). This will save you 4 cycles per set bit in v, and it won&apos;t break compatibility with (hypothetical) existing code that calls the routine, either. (It will add 4 constant cycles before the loop, though)</p>
<p>&#xA0;</p>
<p>Applying both improvements (X register and moving the label) would save 7 cycles per loop iteration, which is a 30% speedup (of just the loop)... not bad.</p>
<p>&#xA0;</p>
<p>Code looks like:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;--count set bits in v
;  trashes v, accumulator, result is in X register

  ldx #0
  lda v
  beq Done
Loop
  inx
  dec v
  and v
  sta v
  bne Loop
Done</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Timing is 8 cycles if v is 0, or 7+16*n-1 if v is not 0... Average case (4 bits set in input) is 70 cycles, 28% faster than the original, assuming I&apos;ve gotten all the numbers right (if not, I apologize). Total code size is 15 bytes (3 bytes smaller than the original).</p>
<p>&#xA0;</p>
<p>However, there are a couple of other ways to count set bits that are faster at the expense of more code. I was messing around with this a while back, and came up with 5 other solutions (I never came up with the Kernighan method on my own, though). Here are a couple of them:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; Count the number of set bits in A
; Unrolled version
; Result in A
; Uses one byte of RAM at tmp (preferably ZP)
; On exit: X and Y untouched, C/Z/N undefined
; Code size: 36 bytes (+1 for RTS = 37)
; Execution time: Constant, 5+(7*8) = 61 cycles (+6 for RTS = 67)
countbits_3:
 sta tmp; 3
 lda #0 ; 2
 rol tmp; 5
 adc #0 ; 2
 rol tmp; 5
 adc #0 ; 2
 rol tmp; 5
 adc #0 ; 2
 rol tmp; 5
 adc #0 ; 2
 rol tmp; 5
 adc #0 ; 2
 rol tmp; 5
 adc #0 ; 2
 rol tmp; 5
 adc #0 ; 2
 rol tmp; 5
 adc #0 ; 2

 rts
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; Count the number of set bits in A
; Nybble table version
; Result in A
; Uses one byte of RAM at tmp (preferably ZP)
; Execution time: Constant, 35 cycles (+6 for RTS)
; Code size: 17 bytes table + 19 bytes code = 36 bytes (+1 for RTS = 37)
; This is faster than the fully-unrolled version,
; but it trashes all the registers and flags. Could use PHA/PLA instead of
; TAY/TYA, to preserve the Y register, at the expense of 2 cycles.
nyb_bits: byte 0, 1, 1, 2, 1, 2, 2, 3, 1, 2, 2, 3, 2, 3, 3, 4
countbits_4:
 tay		   ; 2
 and #$0F	  ; 3
 tax		   ; 2
 lda nyb_bits,x; 4
 sta tmp	   ; 3
 tya		   ; 2
 lsr		   ; 2
 lsr		   ; 2
 lsr		   ; 2
 lsr		   ; 2
 tax		   ; 2
 lda nyb_bits,x; 4
 clc		   ; 2
 adc tmp	   ; 3

 rts		   ; 6
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Neither of these is all that original. The unrolled version is obvious to any 6502&apos;er, and the nybble-table idea came from some code I saw either here or on the [stella] list (I couldn&apos;t find the original code, so I rewrote it from scratch).</p>
<p>&#xA0;</p>
<p>Here&apos;s one I came up with on my own. It&apos;s not all that fast, but I like it because it fits in 11 bytes of code and doesn&apos;t use a temp location in RAM. Also, if I added a ROL before the RTS, the accumulator and carry flag would keep their original values, which might simplify things for the calling code.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; Count the number of set bits in A
; Result in Y
; Uses no RAM
; On exit:
; Y = result, X = 0, A = undefined, C = undefined, Z = 1, N = 0
; Min execution time (input $00, 0 bits set):
; 4+(2+3+2+3)*8-1 = 83 cycles
; Avg execution time (input $AA, 4 bits set):
; 4+(2+3+2+3)*4+(2+2+2+2+3)*4-1 = 87 cycles
; Max execution time (input $FF, 8 bits set):
; 4+(2+2+2+2+3)*8-1 = 91 cycles
; (add 6 cycles for RTS to all 3 counts)
; Code size: 11 bytes (+1 for RTS = 12)

countbits_2:
ldx #8; 2
ldy #0; 2

cb2loop
 rol		 ; 2
 bcc cb2_noiny; 2/3
 iny		 ; 2
cb2_noiny
 dex		 ; 2
 bne cb2loop ; 3

; rol; adding this ROL preserves the original values of A and C (and sets Z and N according to the A value)
 rts; 6 
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>