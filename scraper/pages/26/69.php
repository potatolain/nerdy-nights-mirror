<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on March 9, 2007March 9, 2007</div><div class="mdl-card__supporting-text">
<p>Here&apos;s another:</p>
<p></p>
<pre class="ipsCode">Swapping values with XOR

#define SWAP(a, b) (((a) ^= (b)), ((b) ^= (a)), ((a) ^= (b)))

This is an old trick to exchange the values of the variables a and b without using extra space for a temporary variable.

;--swap a and b

  lda a
  eor b
  sta a
  eor b
  sta b
  eor a
  sta a</pre>
<div></div>
<p></p>
<p>That right?</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2007-03-09T18:58:48Z" title="03/09/2007 06:58  PM" data-short="12 yr">March 9, 2007</time> by vdub_bobby</strong>
</span>
</div><div class="mdl-card--border"></div>