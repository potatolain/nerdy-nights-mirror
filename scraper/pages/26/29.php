<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="batari" data-cite="batari" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>A few days ago I worked up a slick routine for 8-bit unsigned multiplication (or I think it&apos;s slick, anyway.)&#xA0; It works as long as the values do not overflow 8 bits, in which case the value should not be relied upon anyway.&#xA0; The loop will never repeat more than 8 times.<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Computing 8x8-&gt;16 multiply is more useful than 8x8-&gt;8, and isn&apos;t really any harder. I&apos;ll have to see if I can work one up that deals with the 6502&apos;s &quot;fun&quot; add with carry behavior.</p>
<p>&#xA0;</p>
<p>As for division, the normal approach is to do a shift-and-subtract. A 16/8-&gt;8+8 result is pretty easy, with the caveat that the results will be meaningless if the quotient doesn&apos;t fit in eight bits. Again, I&apos;ll try to work one up for you.</p>
<p></p>
<div style="text-align:right;"><p><a rel></a>896028[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>You can whip one up for 16-bit multiplication but I don&apos;t need it right now - I just need 8x8-&gt;8 for batari Basic, actually, where you can&apos;t use 16-bit numbers anyway, and probably won&apos;t ever be able to - as the utility of these is somewhat limited and the routines to implement them would use up precious ROM space. It&apos;s wise to keep bB from getting too top-heavy, since it&apos;s supposed to be a stepping stone to asm, and is only intended for making games, not doing complex math...</p>
<p>&#xA0;</p>
<p>But don&apos;t let this stop you, as someone may find it useful, sometime, somewhere...</p>
<p>&#xA0;</p>
<p>As for division, all I want is 8/8-&gt;8... If you want to do 16/8-&gt;8+8, go ahead, but again, I probably don&apos;t need it, for the same reasons.</p>
</div><div class="mdl-card--border"></div>