<div class="mdl-card__title"><strong>UrchlayUrchlay</strong> posted on March 11, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253590" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253577" data-ipsquote-username="Urchlay" data-cite="Urchlay" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>That would actually be kind of elegant, if it weren&apos;t for the need to test for the special A==0 case <img alt=":(" src="scraper/images/atariage_icon_sad.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_sad.gif">
</div></blockquote>
<p>&#xA0;</p>
<p>Hmm...</p>
<p></p>
<pre class="ipsCode"> cmp #1
 adc #255
lp:
 lsr
 bcc lp
</pre>
<div></div>
<p></p>
<p>Should do an early exit (NZ) in the A=0 case.</p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Nice!</p>
<p>&#xA0;</p>
<p>Now it&apos;s elegant.</p>
</div><div class="mdl-card--border"></div>