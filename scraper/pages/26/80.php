<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253514" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">   lda v
  dec v
  and v
  inc v</pre>
<div></div>
<p></p>
<p>Which returns zero in the accumulator if v is a power of two and anything else if it isn&apos;t. And preserves v.</p>
<p>&#xA0;</p>
<p>Except it doesn&apos;t handle v==0 and I&apos;d rather have it return 0 if false and anything else if true.</p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>The return value should really be in a flag, so you can immediately use a branch instruction afterwards... otherwise you&apos;ll need something like &quot;cmp #0&quot; in the caller. How about:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">; Warning: untested code!

is_x_power_of_2:; convenience entry point: checks X instead of location v
 stx v
 .byte $2C; aka BIT absolute opcode, skips the &quot;sta v&quot; below

is_a_power_of_2:; convenience entry point: checks accumulator instead of location v
 sta v

; Main entry point:
is_v_power_of_2: subroutine; {
 lda v
 bne .main
 lda #1; Special case: return with Z flag false, if v==0
 rts

.main; v is known to be non-zero, here
 dec v
 and v; accumulator now contains 0 if v is a power of 2 (Z flag is set correctly, but &quot;inc v&quot; is about to destroy it)

; If you don&apos;t care about preserving v, you can comment out both these lines:
 inc v
 cmp #0; set Z flag true if a==0, or false otherwise (needed because &quot;inc v&quot; trashes the Z flag)

.done
 rts
; }
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>It&apos;s not so &quot;killer&quot; any more, but it&apos;s easy to use:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode"> ldx $whatever; get a byte from somewhere
 stx v
 jsr is_v_power_of_2; Was it a power of 2?
 beq yes_it_was; yep!
; no, do whatever here...

;; Alternatively:
 lda $whatever; or, A could be the result of some calculations
 jsr is_a_power_of_2
 beq yes_it_was
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Also, since you&apos;re only dealing with an 8-bit byte, you can just brute-force it:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">; Return Z=true if A is a power of two, or Z=false if it isn&apos;t
; Uses no RAM, preserves A/X/Y, trashes flags
is_a_power_of_2: subroutine; {
 cmp #1
 beq .yes
 cmp #2
 beq .yes
 cmp #4
 beq .yes
 cmp #8
 beq .yes
 cmp #16
 beq .yes
 cmp #32
 beq .yes
 cmp #64
 beq .yes
 cmp #128
 beq .yes

; if none of the compares are true, Z ends up being false
.yes; if any of the compares are true, Z is true when we branch here

; Either way, just return it.
 rts
; }
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Converting the brute-force method to a loop... which will be slower than the original:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">is_a_power_of_2: subroutine; {
 ldx #1
 stx tmp

.loop; {
 cmp tmp
 beq .done; return with Z=true
 asl tmp
 bne .loop
;	}

; original: lda #1; return with Z=false (too bad there&apos;s no CLZ in 6502-speak)
; EDIT:
 ldx #1; return with Z=false, preserving the value of A

.done
 rts
; }
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>&#xA0;</p>
<p>However, TJ is probably about to post something that blows all this code away <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2007-03-10T00:48:07Z" title="03/10/2007 12:48  AM" data-short="12 yr">March 10, 2007</time> by Urchlay</strong>
</span>
</div><div class="mdl-card--border"></div>