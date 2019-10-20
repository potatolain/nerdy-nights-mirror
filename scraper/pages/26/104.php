<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on January 23, 2008</div><div class="mdl-card__supporting-text">
<p>Anyone have a killer hack for 8.8 multiplication? </p>
<p>I need to do 8.8 * 8.8 and have the result be 8.8.</p>
<p>&#xA0;</p>
<p>I know that the integer part of the result will not exceed 8 bits and I don&apos;t need a 16-bit remainder.</p>
<p>&#xA0;</p>
<p>What I&apos;ve got is this:</p>
<p></p>
<pre class="ipsCode">  ; a.b * c.d = e.fg
  lda #0
  sta e
  sta f
  sta g
  ldx a
  ldy b
  clc
MultiplyLoop
  lda g
  adc d
  sta g
  lda f
  adc d
  sta f
  lda e
  adc #0
  sta e
  dey
  bne MultiplyLoop
  dex
  bne MultiplyLoop
 ;result in e.fg ... ignore g to get e.f as 8.8 result</pre>
<div></div>
<p></p>
<p>(This ignores some zero cases.)</p>
<p>The main problem is that this is slower than dirt.</p>
</div><div class="mdl-card--border"></div>