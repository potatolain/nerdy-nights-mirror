<div class="mdl-card__title"><strong>grafixbmpgrafixbmp</strong> posted on March 2, 2009</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1694369" data-ipsquote-username="Nukey Shay" data-cite="Nukey Shay" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>List &apos;em first. %sssssccc. It&apos;s only 2 cycles to AND off the upper bits...and by using LAX, you don&apos;t need to reload (the original value is still in X).<p>&#xA0;</p>
<p>LAX tablevalue</p>
<p>AND #7</p>
<p>STA AUDCn</p>
<p>TXA</p>
<p>LSR</p>
<p>LSR</p>
<p>LSR</p>
</div></blockquote>
<p>&#xA0;</p>
<p>How quick then would it be to do the others from X? Remove the low 3 bits and shift down. Or somehow keep the carry at 0 while ROR 3 times</p>
</div><div class="mdl-card--border"></div>