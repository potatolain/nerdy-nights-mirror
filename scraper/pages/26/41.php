<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>Here&apos;s some interesting code <a href="https://atariage.com/forums/index.php?showtopic=75267&amp;view=findpost&amp;p=954542" rel>from batari</a>:</p>
<p>&#xA0;</p>
<p>This:</p>
<p></p>
<pre class="ipsCode"> &#xA0; ldx #56
&#xA0; loop
&#xA0;;do some stuff here
&#xA0; txa
&#xA0; sec
&#xA0; sbc #14
&#xA0; tax
&#xA0; bne loop</pre>
<div></div>
<p></p>
<p>Can be rewritten like this:</p>
<p></p>
<pre class="ipsCode"> &#xA0; ldx #56
&#xA0; loop
&#xA0;;do some stuff here
&#xA0; txa
&#xA0; sbx #14
&#xA0; bne loop</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>And his comment:</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>the whole routine above was in a loop that was executed up to 10 times, thus saving 2 bytes and up to 160 cycles.</div></blockquote>
<p>Though I think that &quot;160 cycles&quot; is wrong; I think if the loop is executed 10 times you would save 40 cycles altogether.</p>
</div><div class="mdl-card--border"></div>