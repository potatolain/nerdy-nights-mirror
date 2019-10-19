<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Well, I just snuck 8x8-&gt;16 in up above.&#xA0; I would think that for your fixed-point maths you&apos;d want an 8x8-&gt;16 multiply.&#xA0; As noted, it&apos;s pretty easy.<p></p>
</div></blockquote>
<p>Wow, I had no idea it was so simple. I&apos;ll go ahead and use it, and just return the lower byte in the result, but leave a note in the docs on how to get the upper byte for integer multiplication if someone really needs it in bB!</p>
<p>&#xA0;</p>
<p>EDIT: Just noticed, before the ADC, the carry is always set... do you need to clear it first?</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2005-07-21T22:53:57Z" title="07/21/2005 10:53  PM" data-short="14 yr">July 21, 2005</time> by batari</strong>
</span>
</div><div class="mdl-card--border"></div>