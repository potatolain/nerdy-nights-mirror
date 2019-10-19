<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>Hmmm. Have to think about that...</p>
<p>&#xA0;</p>
<p>EDIT: I&apos;m not exactly following this. Doesn&apos;t 8.16 / 256 = 0.24 ?</p>
<p>&#xA0;</p>
<p>EDIT: Actually, more generally, I think I follow your argument - but what <em>is</em> that rounding error? How big is it?</p>
<p>&#xA0;</p>
<p>After all, 2.95 * 0.73 = 2.1535</p>
<p>If you throw away the bottom two digits, you get 2.15 which is within 1/2% of the true answer.</p>
<p>But if you truncate before multiplying you get 2.03, which is over 5% away from the actual answer.</p>
<p>&#xA0;</p>
<p>And the difference would be larger for truncating 4 bits, so I dunno...a pre-truncating routine would have to be smoking fast to be worth the error, I think. <img alt=":ponder:" src="scraper/images/atariage_icon_ponder.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_ponder.gif"></p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2008-01-24T23:12:03Z" title="01/24/2008 11:12  PM" data-short="11 yr">January 24, 2008</time> by vdub_bobby</strong>
</span>
</div><div class="mdl-card--border"></div>