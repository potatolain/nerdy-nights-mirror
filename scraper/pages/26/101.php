<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>Getting the 2&apos;s complement of the accumulator, rudimentary, but the extra here is two implementations.</p>
<p>&#xA0;</p>
<p>One version uses clc, the other sec so you could save the sec or clc if you know the prior state of the carry flag.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;2&apos;s complement x = x ^ $FF + 1
;assumes carry is clear
 eor #$FF
 adc #01

; 2&apos;s complement x = x - 1 ^ $FF  
; assumes carry is set
 sbc #01
 eor #$FF</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>