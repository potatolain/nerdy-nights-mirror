<div class="mdl-card__title"><strong>+bataribatari</strong> posted on June 12, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<pre class="ipsCode">[code]
&#xA0; &#xA0;LAX word
&#xA0; &#xA0;INX
&#xA0; &#xA0;AND #$F0
&#xA0; &#xA0;STA word
&#xA0; &#xA0;TXA
&#xA0; &#xA0;AND #$0F
&#xA0; &#xA0;ORA word
&#xA0; &#xA0;STA word
</pre>
<div></div>
<p></p>
<p></p>
<div style="text-align:right;"><p><a rel></a>872999[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>I think I can save a byte... I am not totally sure if this will work though, I&apos;ve been wrong before.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">&#xA0; &#xA0;inc word
&#xA0; &#xA0;lax word
&#xA0; &#xA0;and #$0f
&#xA0; &#xA0;bne no
&#xA0; &#xA0;txa
&#xA0; &#xA0;sbx #$10
&#xA0; &#xA0;stx word
no
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>