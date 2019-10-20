<div class="mdl-card__title"><strong>supercatsupercat</strong> posted on March 11, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1254160" data-ipsquote-username="Urchlay" data-cite="Urchlay" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Now it&apos;s elegant.</div></blockquote>
<p>&#xA0;</p>
<p>Maybe. Still a bit slow, though.</p>
<p></p>
<pre class="ipsCode"> cmp #1   ; Optional first part to make zero yield a non-zero result
 adc #255

 tax
 dex
 sbx #0
</pre>
<div></div>
<p></p>
<p>If for some reason it&apos;s better to have the result in the carry flag, replace the last instruction with &quot;sbx #1&quot;. In that case, the zero flag will not be meaningful.</p>
</div><div class="mdl-card--border"></div>