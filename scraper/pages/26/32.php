<div class="mdl-card__title"><strong>retroconretrocon</strong> posted on July 21, 2005July 21, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>As for division, the normal approach is to do a shift-and-subtract.&#xA0; A 16/8-&gt;8+8 result is pretty easy, with the caveat that the results will be meaningless if the quotient doesn&apos;t fit in eight bits.&#xA0; I&apos;ll try to work one up for you.<p></p>
<div style="text-align:right;"><p><a rel></a>896028[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Supercat,</p>
<p>&#xA0;</p>
<p>For a division shortcut, does this make any sense to you? This was a response I just got on a mailing list when asking how to optimize out a divide by 5 on a 10 bit unsigned number. I&apos;m not sure I understand it fully, but I&apos;d like to understand the concept. Do you know what would be the cheapest way to calculate a divide by 5? Table not an option of course.</p>
<p>&#xA0;</p>
<p>&quot;This is often easier to understand when expressed in binary.</p>
<p>&#xA0;</p>
<p>1/5 equals 0.00110011001100110011 etc.</p>
<p>&#xA0;</p>
<p>0.00110011 etc equals 11 multiplied by 0.000100010001 etc.</p>
<p>&#xA0;</p>
<p>0.000100010001 etc equals 10001 multiplied by 0.0000000100000001 etc.</p>
<p>&#xA0;</p>
<p>This suggests the following result (in C syntax):</p>
<p>&#xA0;</p>
<p>Y1 = (X + X&lt;&lt;1)</p>
<p>&#xA0;</p>
<p>Y2 = (Y1 + Y1&lt;&lt;4)</p>
<p>&#xA0;</p>
<p>Y3 = (Y2 + Y2&lt;&lt;<img alt="8)" src="scraper/images/atariage_icon_cool.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_cool.gif"></p>
<p>&#xA0;</p>
<p>and we have a result accurate to 16 bits with only three adders.</p>
<p>&#xA0;</p>
<p>Y4 = (Y3 + Y3&lt;&lt;16)</p>
<p>&#xA0;</p>
<p>32 bits with only four adders. &quot;</p>
<p>&#xA0;</p>
<p>[EDIT] Somehow I think this is related to this algorithm here, but I&apos;m not seeing it quite yet: <a href="http://www.sxlist.com/techref/method/math/divconst.htm" rel="external nofollow" original-href="http://www.sxlist.com/techref/method/math/divconst.htm">http://www.sxlist.com/techref/method/math/divconst.htm</a></p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2005-07-21T23:27:06Z" title="07/21/2005 11:27  PM" data-short="14 yr">July 21, 2005</time> by retrocon</strong>
</span>
</div><div class="mdl-card--border"></div>