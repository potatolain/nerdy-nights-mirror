<div class="mdl-card__title"><strong>supercatsupercat</strong> posted on May 21, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1301054" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>If you need to check the overflow flag then use the following code sequence.</div></blockquote>
<p>&#xA0;</p>
<p>Or you could do the shift the normal way and then do something like:</p>
<p></p>
<pre class="ipsCode">  bcs  shifted_out_1
 bpl  overflow_nope
overflow_yep:
 ...

shifted_out_1:
 bpl overflow_yep
overflow_nope:</pre>
<div></div>
<p></p>
<p>That takes 5 cycles if no overflow; 4 or 6 cycles if overflow. The accumulator is not disturbed.</p>
</div><div class="mdl-card--border"></div>