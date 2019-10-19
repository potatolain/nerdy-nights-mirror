<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451363" data-ipsquote-username="Ben_Larson" data-cite="Ben_Larson" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>(scroll down to &apos;Binary Multiplication&apos;):</div></blockquote>
<p>&#xA0;</p>
<p>Three useful optimizations I would suggest:</p>
<p>&#xA0;</p>
<p></p>
<ul>
<li>Subtract 1 from the multiplicand stored in memory, to eliminate the in-loop CLC.<br>
</li>
<li>Store the other multiplicand into the product low byte location. In that way, the ROR that stores the product low bits can also sample the next bit of the multiplicand.<br>
</li>
<li>If code space permits, unroll the loop at least somewhat. Unrolling 2x will save about twenty cycles.<br>
</li>
</ul>
<p></p>
<p>Such approaches still won&apos;t be as fast as the table-lookup approach, but they&apos;ll be pretty good.</p>
</div><div class="mdl-card--border"></div>