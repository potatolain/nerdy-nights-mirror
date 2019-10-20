<div class="mdl-card__title"><strong>Robert MRobert M</strong> posted on January 24, 2008</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451874" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451861" data-ipsquote-username="Robert M" data-cite="Robert M" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>So is this really a 4.8 * 4.8 multiply, or you can just guarantee that if the one value is bigger than 12 bits, then the other will be sufficiently small to prevent an 8-bit overflow?<p>&#xA0;</p>
<p>&#xA0;</p>
<p>If it is really just 4.8 * 4.8 and you are discarding the fraction, then you can just do 4.4 * 4.4. Because the lower 4 bits of the fractions can never effect the integer portion of the result. 4.4 * 4.4 is just a bit shifted 8*8. I think that will simplify things. <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"></p>
</div></blockquote>
<p>If you scroll/read down a bit, you&apos;ll see that it is really 0.8 * 8.8 and I want an 8.8 result. And I wrote a ~ 1-scanline multiply routine, just waiting for someone to tell me (a) how to make it faster or (b) how it won&apos;t work. <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>&#xA0;</p>
<p>Since you are thowing away the bottom byte of the 8.16 result, doesn&apos;t the problem reduce to 0.4 * 8.4, and you can just use a lookup table with the 16 possible 8.8 results? Or is my thinking all screwy on this?</p>
<p>&#xA0;</p>
<p>Cheers!</p>
</div><div class="mdl-card--border"></div>