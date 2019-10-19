<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451337" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Do you mean the f(x) = (x^2)/4 method?<p>&#xA0;</p>
<p>That requires a table of squares, which is fine for 8 bits, but how do I translate that to 16 bits? The table I would need is enormous! I don&apos;t have that much space. <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
</div></blockquote>
<p>No, you only require those 8 bit tables. I did this back in the 80ies with my C64. IIRC I did use 5 256 bytes tables (some were used just to save a few cycles) for 32 bit FP math (Mandelbrot).</p>
<p>&#xA0;</p>
<p>Let&apos;s see if I can remember it...</p>
<p>&#xA0;</p>
<p>A8:8*B8:8 = A8:0*B8:0 + 2*A8:0*B0:8 + 2*A0:8*B8:0 + A0:8*B:08</p>
<p>&#xA0;</p>
<p>So everything is reduced to 8 (or 9) bits. You can get away with just one 256 bytes table. Or you can do extra tables for the 9 bit results to save a few extra cycles.</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2008-01-24T17:38:47Z" title="01/24/2008 05:38  PM" data-short="11 yr">January 24, 2008</time> by Thomas Jentzsch</strong>
</span>
</div><div class="mdl-card--border"></div>