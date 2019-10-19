<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451813" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>A0:8 * B0:8 + 256*(A0:8 * B8:0)<p>and then just throw away the bottom byte.</p>
</div></blockquote>
<p>You have to double A0:8 * B8:0</p>
<p>&#xA0;</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>You need a table of the values (x^2)/4 for x=0 to 255. But what happens when (x^2)/4 &gt; 255? I.e., for x&gt;31? Don&apos;t you need two tables, one for the lower byte and one for the upper byte.</div></blockquote>
<p>Sure, 2 tables here. We are getting close to the 5 tables I remember. <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
<p>&#xA0;</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>And don&apos;t your tables need to be ~512 bytes long, for when x+y&gt;255? Since xy=f(x+y)-f(x-y)</div></blockquote>
<p>That would be another 2 tables, yes. Unless I miss something. <img alt=":ponder:" src="scraper/images/atariage_icon_ponder.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_ponder.gif"></p>
</div><div class="mdl-card--border"></div>