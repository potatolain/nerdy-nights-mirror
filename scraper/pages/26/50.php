<div class="mdl-card__title"><strong>djmipsdjmips</strong> posted on November 15, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div> I also like his &apos;toggle carry&apos; method, though I still find myself wishing the 6502 allowed a direct method to do that.<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Yes, that is a nice one. At a quick glance, I thought it trashed A (but it doesn&apos;t as bit seven is safely tucked away in the carry and is restored in the ror)</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">rol	; Cb into b0 &#xA0;
eor #$01	; toggle bit
ror	; b0 into Cb
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>