<div class="mdl-card__title"><strong>+bataribatari</strong> posted on July 21, 2005</div><div class="mdl-card__supporting-text">
<p>Hello,</p>
<p>&#xA0;</p>
<p>A few days ago I worked up a slick routine for 8-bit unsigned multiplication (or I think it&apos;s slick, anyway.) It works as long as the values do not overflow 8 bits, in which case the value should not be relied upon anyway. The loop will never repeat more than 8 times.</p>
<p>&#xA0;</p>
<p>The beq done and bcs done are optional, one or both might save cycles but I haven&apos;t tested to see if it actually decreases or increases cycles on average.</p>
<p></p>
<pre class="ipsCode">; x and a contain multiplicands, result in a

stx temp1
sta temp2
lda #0
rept
lsr temp2
bcc skip
clc
adc temp1
;bcs done might save cycles?
skip
;beq done might save cycles?
asl temp1
bne rept
done
</pre>
<div></div>
<p></p>
<p>I tried to work up a good division routine too, but all I could come up with is successive subtraction, which is sub-optimal for small denominator values. Anyone know of a better way?</p>
<p></p>
<pre class="ipsCode">; x=numerator a=denominator, result in x
lsr
beq end;div by 0 = bad, div by 1=no calc needed, so bail out
rol;restore a
sta temp1
txa 
ldx #$ff
sec
loop
sbc temp1
inx
bcs loop
end; result in x
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>