<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1254375" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1254160" data-ipsquote-username="Urchlay" data-cite="Urchlay" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Now it&apos;s elegant.</div></blockquote>
<p>&#xA0;</p>
<p>Maybe. Still a bit slow, though.</p>
<p></p>
<pre class="ipsCode"> cmp #1  ; Optional first part to make zero yield a non-zero result
 adc #255

 tax
 dex
 sbx #0
</pre>
<div></div>
<p></p>
<p>If for some reason it&apos;s better to have the result in the carry flag, replace the last instruction with &quot;sbx #1&quot;. In that case, the zero flag will not be meaningful.</p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Ahhh... I wasn&apos;t going to say anything about your previous routine but I <em>was</em> wondering... I mean it looped! <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"></p>
<p>&#xA0;</p>
<p>But this one ties it all together.</p>
</div><div class="mdl-card--border"></div>