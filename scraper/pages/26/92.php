<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1255235" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div><p>I need to find n mod 20. Well, to be specific, I need to find if n mod 20 is zero or otherwise.</p></div></blockquote>
<p>Using prime factors might help here. 20 = 2*2*5, so first we could SHR twice and check the carries. But then we still need an effective solution for 5. <img alt=":ponder:" src="scraper/images/atariage_icon_ponder.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_ponder.gif"> </p>
<p>&#xA0;</p>
<p>Not sure, but this may work:</p>
<pre class="ipsCode">  while (n &gt; 0) {
n = n/4 - n%4
 }</pre>
<div></div>
<p></p>
<p>n has to be zero.</p>
</div><div class="mdl-card--border"></div>