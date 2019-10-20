<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on January 24, 2008January 24, 2008</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451900" data-ipsquote-username="Robert M" data-cite="Robert M" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451889" data-ipsquote-username="Robert M" data-cite="Robert M" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Since you are thowing away the bottom byte of the 8.16 result, doesn&apos;t the problem reduce to 0.4 * 8.4, and you can just use a lookup table with the 16 possible 8.8 results? Or is my thinking all screwy on this?<p>&#xA0;</p>
<p>Cheers!</p>
</div></blockquote>
<p>&#xA0;</p>
<p>My thinking is screwy. The table won&apos;t work, but the reduction to 0.4 * 8.8 is still correct I think. <img alt=":ponder:" src="scraper/images/atariage_icon_ponder.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_ponder.gif"></p>
<p></p>
</div></blockquote>
<p>I&apos;m not sure if that is correct or not...it doesn&apos;t seem like it to me, but I have to think for a long time to wrap my head around these things <img alt=":lol:" src="scraper/images/atariage_icon_lol.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_lol.gif"></p>
<p>&#xA0;</p>
<p>But in any case, I don&apos;t think it will help my current routine, other than reducing the size of my tables, since multiplying a nibble by a byte will be the same as multiplying a byte by a byte. Or...<img alt=":ponder:" src="scraper/images/atariage_icon_ponder.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_ponder.gif"></p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2008-01-24T22:16:43Z" title="01/24/2008 10:16  PM" data-short="11 yr">January 24, 2008</time> by vdub_bobby</strong>
</span>
</div><div class="mdl-card--border"></div>