<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="batari" data-cite="batari" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>You can whip one up for 16-bit multiplication but I don&apos;t need it right now - I just need 8x8-&gt;8 for batari Basic, actually, where you can&apos;t use 16-bit numbers anyway, and probably won&apos;t ever be able to - as the utility of these is somewhat limited and the routines to implement them would use up precious ROM space.&#xA0; It&apos;s wise to keep bB from getting too top-heavy, since it&apos;s supposed to be a stepping stone to asm, and is only intended for making games, not doing complex math...</div></blockquote>
<p>&#xA0;</p>
<p>Well, I just snuck 8x8-&gt;16 in up above. I would think that for your fixed-point maths you&apos;d want an 8x8-&gt;16 multiply. As noted, it&apos;s pretty easy.</p>
<p>&#xA0;</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>As for division, all I want is 8/8-&gt;8... If you want to do 16/8-&gt;8+8, go ahead, but again, I probably don&apos;t need it, for the same reasons.</div></blockquote>
<p>&#xA0;</p>
<p>Here&apos;s a simple divide routine off the top of my head, but it probably isn&apos;t quite right. I&apos;ll have to simulate and see if I got it correct. It should divide A:quot by denom, leaving the quotient in quot and the remainder in A.</p>
<p></p>
<pre class="ipsCode">&#xA0;ldx #8
lp:
&#xA0;cmp denom
&#xA0;bcc toosmall
&#xA0;sbc denom &#xA0; ; Note: Carry is, and will remain, set.
&#xA0;rol quot
&#xA0;rol
&#xA0;dex
&#xA0;bne lp
&#xA0;beq done
toosmall:
&#xA0;rol quol
&#xA0;rol
&#xA0;dex
&#xA0;bne lp
done:
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>