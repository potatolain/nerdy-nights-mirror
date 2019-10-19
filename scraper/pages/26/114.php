<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451251" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Anyone have a killer hack for 8.8 multiplication? <p>I need to do 8.8 * 8.8 and have the result be 8.8.</p>
<p>&#xA0;</p>
<p><strong>I know that the integer part of the result will not exceed 8 bits and I don&apos;t need a 16-bit remainder.</strong></p>
</div></blockquote>
<p>&#xA0;</p>
<p>So is this really a 4.8 * 4.8 multiply, or you can just guarantee that if the one value is bigger than 12 bits, then the other will be sufficiently small to prevent an 8-bit overflow?</p>
<p>&#xA0;</p>
<p>&#xA0;</p>
<p>If it is really just 4.8 * 4.8 and you are discarding the fraction, then you can just do 4.4 * 4.4. Because the lower 4 bits of the fractions can never effect the integer portion of the result. 4.4 * 4.4 is just a bit shifted 8*8. I think that will simplify things. <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"> </p>
<p>&#xA0;</p>
<p>Cheers!</p>
</div><div class="mdl-card--border"></div>