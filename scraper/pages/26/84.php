<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253554" data-ipsquote-username="Urchlay" data-cite="Urchlay" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
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
</div></blockquote>
<p>How about</p>
<pre class="ipsCode">  dec v
 lda v
 inc v
 beq .exit
 and v
.exit:</pre>
<div></div>
<p>?</p>
<p>Not perfect, since you still need a compare.</p>
</div><div class="mdl-card--border"></div>