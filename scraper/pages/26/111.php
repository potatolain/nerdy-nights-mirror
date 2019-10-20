<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on January 24, 2008</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451775" data-ipsquote-username="Thomas Jentzsch" data-cite="Thomas Jentzsch" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>No, you only require those 8 bit tables. I did this back in the 80ies with my C64. IIRC I did use 5 256 bytes tables (some were used just to save a few cycles) for 32 bit FP math (Mandelbrot).<p>&#xA0;</p>
<p>Let&apos;s see if I can remember it...</p>
<p>&#xA0;</p>
<p>A8:8*B8:8 = A8:0*B8:0 + 2*A8:0*B0:8 + 2*A0:8*B8:0 + A0:8*B:08</p>
<p>&#xA0;</p>
<p>So everything is reduced to 8 (or 9) bits. You can get away with just one 256 bytes table. Or you can do extra tables for the 9 bit results to save a few extra cycles.</p>
</div></blockquote>
<p>Thanks. </p>
<p>&#xA0;</p>
<p>It turns out what I really need is A0:8 * B8:8 and I don&apos;t need the least-significant byte.</p>
<p>&#xA0;</p>
<p>So I think I can do this...</p>
<p>A0:8 * B0:8 + 256*(A0:8 * B8:0)</p>
<p>and then just throw away the bottom byte. </p>
<p>&#xA0;</p>
<p>My next question!</p>
<p>&#xA0;</p>
<p>You need a table of the values (x^2)/4 for x=0 to 255. But what happens when (x^2)/4 &gt; 255? I.e., for x&gt;31? Don&apos;t you need two tables, one for the lower byte and one for the upper byte. </p>
<p>&#xA0;</p>
<p>And don&apos;t your tables need to be ~512 bytes long, for when x+y&gt;255? Since xy=f(x+y)-f(x-y)</p>
</div><div class="mdl-card--border"></div>