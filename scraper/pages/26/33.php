<div class="mdl-card__title"><strong>supercatsupercat</strong> posted on July 22, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="batari" data-cite="batari" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>EDIT: Just noticed, before the ADC, the carry is always set... do you need to clear it first?<p></p>
<div style="text-align:right;"><p><a rel></a>896042[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>That&apos;s what the &quot;dec mul2&quot; and &quot;inc mul2&quot; instructions are for. Other ways of dealing with the issue would be to subtract mul1 from the accumulator before the multiplication (which would work nicely for the low-half, but correctly dealing with the high half would be more work), inverting mul1 beforehand and then reversing the sense of the branch (adds two bytes/two cycles at the spot where mul1 gets loaded, but makes the routine more &apos;opaque&apos;), or adding a &quot;clc&quot; before the &quot;adc&quot; [which costs one byte instead of four, but sixteen cycles instead of ten].</p>
</div><div class="mdl-card--border"></div>