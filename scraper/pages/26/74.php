<div class="mdl-card__title"><strong>UrchlayUrchlay</strong> posted on March 9, 2007</div><div class="mdl-card__supporting-text">
<p>A while ago, I wrote this bit of code to calculate even/odd parity. It could probably stand some improvement... I definitely don&apos;t consider it a &quot;killer hack&quot;: it&apos;s coded for clarity more than speed or size, but it does implement something from the bithack page, so I thought someone might be interested.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; calc_parity will calculate even or odd parity for the low 7 bits of A,
; sets the high bit and N flag to the result.

; Input:
; A = data to calculate parity for (bit 7 ignored)
; C = carry set for odd parity, clear for even
; X, Y, other flags: ignored

; Output:
; A = data with correct parity bit in bit 7 (bits 0-6 unchanged)
; N = parity bit (same as A bit 7)
; C = parity bit (same as A bit 7 and N)
; Z = 1 if A is 0, or 0 otherwise
; X = 0
; Y = bits 0-6 of input
; tmp = same as Y

; Memory usage: One byte at tmp. No stack used.
; If desired, the routine could easily be modified to preserve the
; Y register (and use another RAM temp instead).

; Execution time: Constant, 108 cycles, +6 for RTS. Add 10 cycles if tmp is
; not located in zero page.

; Code size: 25 bytes, +1 for RTS (+4 if tmp not zero page)

; Code:
calc_parity: subroutine;{
 and #$7F ; 2; throw away top bit (it will get replaced anyway)
 sta tmp  ; 3; copy in tmp will be repeatedly shifted (destroyed),
 tay	  ; 2; so stash another copy in Y
 lda #0   ; 2; init accumulator:
 rol	  ; 2; A=1 if C was set, otherwise A=0
 ldx #7   ; 2
	   ; =13 (+1 if tmp not ZP)

;  {
.loop	 ; loop executes 7 times...
 lsr tmp  ; 5
 adc #0   ; 2
 dex	  ; 2
 bne .loop; 3
	   ; =12*7-1 = 83, +7 if tmp not ZP
;  }

; A now has count of set bits from bits 0-6 of the original argument,
; plus 1 if C flag was initially set.
; Bit 0 of A will be the new parity bit.
 ror	  ; 2; C = bit 0 of A
 lda #0   ; 2
 ror	  ; 2; bit 7 of A = C, bits 0-6 are 0
 sty tmp  ; 3
 ora tmp  ; 3
	   ; =12 (+2 if tmp not ZP)

 rts	  ; 6
;}
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>BTW, the comments with the curly braces (lines like &quot;; }&quot;) are a Stupid Editor Trick: My editor lets me jump from an opening { to a closing } quickly (very handy for C or Java code), so I&apos;ve gotten in the habit of using them in 6502 asm code for easy navigation. I use Vim, and I know Emacs has support for this, too. I&apos;d bet that any halfway decent code editor or IDE supports it, too.</p>
<p>&#xA0;</p>
<p>I&apos;ve also got a vim macro that selects the current block of code (from the { to the }), for cut/copy or applying other commands. I just press F2 to highlight... and I&apos;ve got F1 bound to a macro that comments out the block (or uncomments it, if it&apos;s already commented). Who says vi is hard to use? <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
</div><div class="mdl-card--border"></div>