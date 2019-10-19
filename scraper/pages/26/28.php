<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="batari" data-cite="batari" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>A few days ago I worked up a slick routine for 8-bit unsigned multiplication (or I think it&apos;s slick, anyway.)&#xA0; It works as long as the values do not overflow 8 bits, in which case the value should not be relied upon anyway.&#xA0; The loop will never repeat more than 8 times.<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Computing 8x8-&gt;16 multiply is more useful than 8x8-&gt;8, and isn&apos;t really any harder. The 6502&apos;s lack of add-without-carry is somewhat irksome, but there are a variety of workarounds that could be used.</p>
<p></p>
<pre class="ipsCode">; Compute mul1*mul2+acc -&gt; acc:mul1 [mul2 is unchanged]

&#xA0;ldx #8
&#xA0;dec mul2
lp:
&#xA0;lsr
&#xA0;ror mul1
&#xA0;bcc nope
&#xA0;adc mul2
nope:
&#xA0;dex
&#xA0;bne lp
&#xA0;inc mul2
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>As for division, the normal approach is to do a shift-and-subtract. A 16/8-&gt;8+8 result is pretty easy, with the caveat that the results will be meaningless if the quotient doesn&apos;t fit in eight bits. I&apos;ll try to work one up for you.</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2005-07-21T22:35:17Z" title="07/21/2005 10:35  PM" data-short="14 yr">July 21, 2005</time> by supercat</strong>
</span>
</div><div class="mdl-card--border"></div>