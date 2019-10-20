<div class="mdl-card__title"><strong>+bataribatari</strong> posted on March 9, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253332" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
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
<p></p>
</div></blockquote>
<p>That does have some academic appeal, but this is how I usually do it:</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p> lda a</p>
<p> ldy b</p>
<p> sta b</p>
<p> sty a</p>
<p></p>
</div></blockquote>
<p>I suppose if you absolutely can&apos;t use RAM or another register, the EOR trick would work.</p>
</div><div class="mdl-card--border"></div>