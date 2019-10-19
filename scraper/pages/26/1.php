<div class="mdl-card__title"><strong>CybergothCybergoth</strong> posted on June 12, 2005</div><div class="mdl-card__supporting-text">
<p>Hi there!</p>
<p>&#xA0;</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<pre class="ipsCode">...
&#xA0; &#xA0;lda word &#xA0; &#xA0; &#xA0;; original byte
&#xA0; &#xA0;and #$0f &#xA0; &#xA0; &#xA0;; retrieve lower nybble
&#xA0; &#xA0;tay &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;; index
&#xA0; &#xA0;lda word
&#xA0; &#xA0;clc
&#xA0; &#xA0;adc nextinc,y
&#xA0; &#xA0;sta word
...

nextinc .byte 1,1,1,1,1,1,1,1
&#xA0; &#xA0; &#xA0; &#xA0; .byte 1,1,1,1,1,1,1,-15

</pre>
<div></div>
<p></p>
<p></p>
<div style="text-align:right"><p><a rel></a>872906[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Yours should work a lot better than the other version. So you&apos;re going for speed here? A version without table would certainly waste less ROM space:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">&#xA0; &#xA0;LAX word
&#xA0; &#xA0;INX
&#xA0; &#xA0;AND #$F0
&#xA0; &#xA0;STA temp
&#xA0; &#xA0;TXA
&#xA0; &#xA0;AND #$0F
&#xA0; &#xA0;ORA temp
&#xA0; &#xA0;STA word
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>As many cycles, but 14 bytes saved...</p>
<p>(Also this can count n bits, it&apos;s not fixed to 4)</p>
<p>&#xA0;</p>
<p>Greetings,</p>
<p>Manuel</p>
</div><div class="mdl-card--border"></div>