<div class="mdl-card__title"><strong>+bataribatari</strong> posted on June 15, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<pre class="ipsCode">loop:	jsr random
&#xA0;cmp threshold
&#xA0;rol temp
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>I don&apos;t think this approach will result in an improvement over your version but maybe it sparks an idea.</p>
<p></p>
<div style="text-align:right;"><p><a rel></a>873984[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>I though of doing something similar, it would save bytes but add cycles... But it does spark an idea. This routine is only called every 12 frames, so I should use something like the above and spread it out over several frames, then I&apos;ll have cycles to spare.</p>
</div><div class="mdl-card--border"></div>