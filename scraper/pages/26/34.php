<div class="mdl-card__title"><strong>supercatsupercat</strong> posted on July 22, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="retrocon" data-cite="retrocon" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>For a division shortcut, does this make any sense to you? This was a response I just got on a mailing list when asking how to optimize out a divide by 5 on a 10 bit unsigned number. I&apos;m not sure I understand it fully, but I&apos;d like to understand the concept. Do you know what would be the cheapest way to calculate a divide by 5?</div></blockquote>
<p>&#xA0;</p>
<p>Basically, you&apos;re replacing division by a constant with multiplication by a constant. This is an optimization approach which goes back at least to the 1960&apos;s, and probably even earlier. It&apos;s often an effective approach, but one needs to be careful to ensure that the results will aways be rounded in the expected direction (if one cares).</p>
<p>&#xA0;</p>
<p>By the way, there are some interesting table-based approaches to multiplication by non-constants which can be somewhat practical if one is doing a lot of multiplication, but require some care to ensure correct operation. One nice method, for example, takes advantage of the fact that A*A-B*B = (A+B)*(A-B).</p>
<p></p>
<pre class="ipsCode">FastMult:; Multiplies n1 by n2. &#xA0;Requires that n1+n2 be 255 or less, and n1&gt;=n2.
&#xA0;lda n1
&#xA0;clc
&#xA0;adc n2
&#xA0;tax
&#xA0;lda n1
&#xA0;sec
&#xA0;sbc n2
&#xA0;tay
&#xA0;lda squareL,x
&#xA0;sbc squareL,y
&#xA0;sta resultL
&#xA0;lda squareH,x
&#xA0;sbc squareH,y
&#xA0;sta resultH
</pre>
<div></div>
<p></p>
<p>Fourty-two cycles for an 8x8-&gt;16 multiply, subject to the restrictions noted above. Considerably faster than the shift-add method, but at the expense of 512 bytes worth of tables. The tables should be computed such that ([squareH+n]:[squareL+n]) equals int(n*n/4).</p>
</div><div class="mdl-card--border"></div>