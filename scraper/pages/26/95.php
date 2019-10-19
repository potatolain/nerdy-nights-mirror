<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>Here&apos;s a quick mod 5 I just came up with:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">	LDX	#5*32; start with 5 shifted left as far as possible
STX	temp
.10
CMP	temp
BCS	.20; branch if A &lt; temp
SEC; may or not be needed, I can never remember how carry works 6502 subtract
SBC	temp; subtract temp from A
;   BNE	.30; can short-cut exit here if exact multiple
.20
LSR	temp; shift divisor right
BCC	.10; loop until all divisors tried
.30
; remainder is in A
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Completely untested of course. This should work for a mod by any odd number, using the low bit as an end condition. If you shift out and save the two low bits, then shift them back in, you should have a mod 20. You can then use LDX #5*8 instead of LDX #5*32. It might even be possible to completely unroll this:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">	LSRA
ROR temp
LSRA
ROR temp

CMP #5*8
BCS .10
SEC
SBC #5*8
.10
CMP #5*4
BCS .20
SEC
SBC #5*4
.20
CMP #5*2
BCS .30
SEC
SBC #5*2
.30
CMP #5*1
BCS .40
SEC
SBC #5*1
.40
ASL temp
ROLA
ASL temp
ROLA
.50
BNE notdiv20</pre>
<div></div>
<p></p>
<p>Fix the carry flag stuff to work the right way of course.</p>
<p>&#xA0;</p>
<p>If all you need to do is test for divide by 20, then just BCS notdiv20 instead of ROR temp.</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2007-03-13T19:20:23Z" title="03/13/2007 07:20  PM" data-short="12 yr">March 13, 2007</time> by Bruce Tomlin</strong>
</span>
</div><div class="mdl-card--border"></div>