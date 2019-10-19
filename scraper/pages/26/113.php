<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451817" data-ipsquote-username="Thomas Jentzsch" data-cite="Thomas Jentzsch" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451813" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>A0:8 * B0:8 + 256*(A0:8 * B8:0)<p>and then just throw away the bottom byte.</p>
</div></blockquote>
<p>You have to double A0:8 * B8:0</p>
</div></blockquote>
<p>Nah, slightly different algorithm, I think.</p>
<p>&#xA0;</p>
<p>Use base-10, let each letter be a digit: a * bc = a * ( ( 10 * b ) + c ) = 10 * a * b + a * c</p>
<p>&#xA0;</p>
<p>Same thing, only where each &quot;digit&quot; is an 8-bit number, the base is 256.</p>
<p>So a * bc = a * ( ( 256 * b ) + c ) = 256 * a * b + a * c</p>
<p>&#xA0;</p>
<p>In other words, I drop the &quot;place&quot; value of each digit and then add it back in at the end, kinda like when you do multiplication on paper:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">	 a b
  * c d
  ------
  ad bd
ac bc
--------</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Using a lot of large tables, I think I can get my A0:8 * B8:8 multiplication, throwing away the bottom byte of the result, in 77 cycles:</p>
<p></p>
<pre class="ipsCode">  ;--a * b:c
  lda a
  sta IntPtrPlus
  sta FractPtrPlus
  sta IntPtrMinus
  sta FractPtrMinus   ;four tables so I don&apos;t have to figure -c
  ldy c
  lda (IntPtrPlus),Y
  sec
  sbc (IntPtrMinus),Y
  sta ResultInt1
 ;--don&apos;t care about bottom byte of a * c since I&apos;ll drop it anyway
  ldy b
  lda (IntPtrPlus),Y
  sec
  sbc (IntPtrMinus),Y
  sta ResultInt2
  lda (FractPtrPlus),Y
  sbc (FractPtrMinus),Y
  clc
  adc ResultInt1
  sta ResultInt1
  lda ResultInt2
  adc #0
  sta ResultInt2</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>I *think* that will work...</p>
</div><div class="mdl-card--border"></div>