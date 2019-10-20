<div class="mdl-card__title"><strong>supercatsupercat</strong> posted on December 21, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Yes, that is a nice one. At a quick glance, I thought it trashed A (but it doesn&apos;t as bit seven is safely tucked away in the carry and is restored in the ror)<p></p>
<div style="text-align:right;"><p><a rel></a>965779[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>BTW, if it&apos;s desired to copy bit 7 of an address into all bits of the accumulator (so it&apos;s 00 or FF):</p>
<p></p>
<pre class="ipsCode">&#xA0;lda #$7F
&#xA0;cmp Address ; Carry clear if &gt;= $80
&#xA0;adc #$80 &#xA0;; $00 if carry set; $FF if carry clear
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>