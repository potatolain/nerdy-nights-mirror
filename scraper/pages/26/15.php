<div class="mdl-card__title"><strong>djmipsdjmips</strong> posted on June 14, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="batari" data-cite="batari" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>What this does is set a number of random bits in a memory location.&#xA0; X is defined before calling this routine.&#xA0; Actually, it&apos;s not &quot;killer&quot; yet - I think this can be improved for cycles as well as space... but I&apos;m at a loss for ideas...&#xA0; Anyone?<p>&#xA0;</p>
<p>EDIT: oops, &quot;bits&quot; should be zero page, not immediate.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">makemines
&#xA0; &#xA0; &#xA0; &#xA0;lda bits
&#xA0; &#xA0; &#xA0; &#xA0;sta TEMPVAR
loop &#xA0; &#xA0;JSR randomize; returns random value in accumulator
&#xA0; &#xA0; &#xA0; &#xA0;AND #7
&#xA0; &#xA0; &#xA0; &#xA0;TAY
&#xA0; &#xA0; &#xA0; &#xA0;LDA maskbit,y
&#xA0; &#xA0; &#xA0; &#xA0;ORA minefield-1,x; x is defined outside this routine
&#xA0; &#xA0; &#xA0; &#xA0;STA minefield-1,x
&#xA0; &#xA0; &#xA0; &#xA0;dec TEMPVAR
&#xA0; &#xA0; &#xA0; &#xA0;BPL loop
&#xA0; &#xA0; &#xA0; &#xA0;rts

maskbit
&#xA0; &#xA0; &#xA0; &#xA0;.byte %00000001
&#xA0; &#xA0; &#xA0; &#xA0;.byte %00000010
&#xA0; &#xA0; &#xA0; &#xA0;.byte %00000100
&#xA0; &#xA0; &#xA0; &#xA0;.byte %00001000
&#xA0; &#xA0; &#xA0; &#xA0;.byte %00010000
&#xA0; &#xA0; &#xA0; &#xA0;.byte %00100000
&#xA0; &#xA0; &#xA0; &#xA0;.byte %01000000
&#xA0; &#xA0; &#xA0; &#xA0;.byte %10000000
</pre>
<div></div>
<p></p>
<p></p>
<div style="text-align:right;"><p><a rel></a>873707[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>hmmm. So let me see, so bits + 1 is the maximum number of bits you want set. So if bitsis 2 for example, some legitimate output has 1 to 3 bits set because your random routine could return the same result each time for instance. Is that what you really want or does it matter if the routine always returned the number of bits </p>
<p>&#xA0;</p>
<p>I thought about something where you generate a bit per loop and the following is an idea for the inner loop.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">loop:	jsr random
&#xA0;cmp threshold
&#xA0;rol temp
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>I don&apos;t think this approach will result in an improvement over your version but maybe it sparks an idea.</p>
</div><div class="mdl-card--border"></div>