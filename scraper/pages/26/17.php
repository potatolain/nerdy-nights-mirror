<div class="mdl-card__title"><strong>+bataribatari</strong> posted on June 15, 2005June 15, 2005</div><div class="mdl-card__supporting-text">
<p>I like little code snippets like the ones posted here... I don&apos;t want this thread to die, so I&apos;ll post another one of my hacks that saved a few bytes.</p>
<p>&#xA0;</p>
<p>In 2600 games, there&apos;s often tons of STA WSYNCs, so I wondered if there was a way to get basically the same effect while saving space. So I came up with this, which works in cases where you have some kernel timing to spare, and the stack pointer is constant (let&apos;s assume $FF). Basically you replace all STA WSYNCs with BRK, but don&apos;t add the extra byte after the BRK, by using this short BRK routine:</p>
<p></p>
<pre class="ipsCode">brkroutine
DEC $FE; correct return address to eliminate the byte after the BRK
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;; ONLY works when low byte of return address is not zero!
STA WSYNC
RTI
</pre>
<div></div>
<p></p>
<p>If you replace 6 or more STA WSYNCs, you start saving space...</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2005-06-15T23:20:29Z" title="06/15/2005 11:20  PM" data-short="14 yr">June 15, 2005</time> by batari</strong>
</span>
</div><div class="mdl-card--border"></div>