<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>That division by 5 is nasty for optimization. Instead I recommend dividing by 40 so that the average number of times through the loop is cut in half plus 1 add instruction. Its slower for some cases, but I estimate about 45% faster on average.</div></blockquote>
<p>&#xA0;</p>
<p>How about something like:</p>
<p></p>
<pre class="ipsCode">  sec
u160: ; Test 160 from above
 sbc #160
 bcc b80
u80:
 sbc #80
 bcc b40
u40:
 sbc #40
 bcc b20
u20:
 sbc #20
 bcc bzero
done:
 rts
b80: ; Test 80 from below
 adc #80
 bcs u40
b40:
 adc #40
 bcs u20
b20:
 adc #20
 bcs done
bzero:
 adc #20
 rts</pre>
<div></div>
<p></p>
<p>That should take 10 cycles for adc/sbc&apos;s, 8-12 for branches, and six for the RTS.</p>
</div><div class="mdl-card--border"></div>