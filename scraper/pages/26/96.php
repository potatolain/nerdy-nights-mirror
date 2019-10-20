<div class="mdl-card__title"><strong>supercatsupercat</strong> posted on March 13, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1256189" data-ipsquote-username="Bruce Tomlin" data-cite="Bruce Tomlin" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p>Here&apos;s a quick mod 5 I just came up with:</p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Decent approach, though I don&apos;t see the need for temp:</p>
<p></p>
<pre class="ipsCode"> ldx #8
lp:
 cmp #80
 bcc nosub
 sbc #160 ; Note carry set by cmp
 bcs nosub
 adc #80 ; Note carry clear by sbc
nosub:
 asl
 dex
 bne lp
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>