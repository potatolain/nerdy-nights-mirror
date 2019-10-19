<div class="mdl-card__title"><strong>+bataribatari</strong> posted on June 13, 2005June 13, 2005</div><div class="mdl-card__supporting-text">
<p>What this does is set a number of random bits in a memory location. X is defined before calling this routine. Actually, it&apos;s not &quot;killer&quot; yet - I think this can be improved for cycles as well as space... but I&apos;m at a loss for ideas... Anyone?</p>
<p>&#xA0;</p>
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
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2005-06-13T23:12:31Z" title="06/13/2005 11:12  PM" data-short="14 yr">June 13, 2005</time> by batari</strong>
</span>
</div><div class="mdl-card--border"></div>