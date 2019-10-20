<div class="mdl-card__title"><strong>+bataribatari</strong> posted on November 10, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Here&apos;s some interesting code <a href="https://atariage.com/forums/index.php?showtopic=75267&amp;view=findpost&amp;p=954542" rel original-href="https://atariage.com/forums/index.php?showtopic=75267&amp;view=findpost&amp;p=954542">from batari</a>:<p>&#xA0;</p>
<p>This:</p>
<p></p>
<pre class="ipsCode"> &#xA0; ldx #56
&#xA0; loop
;do some stuff here
&#xA0; txa
&#xA0; sbx #14
&#xA0; bne loop</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>And his comment:</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>the whole routine above was in a loop that was executed up to 10 times, thus saving 2 bytes and up to 160 cycles.</div></blockquote>
<p>Though I think that &quot;160 cycles&quot; is wrong; I think if the loop is executed 10 times you would save 40 cycles altogether.</p>
<p></p>
<div style="text-align:right;"><p><a rel></a>963347[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>The comment was misleading. The loop shown is executed 4 times, but an outer, unseen loop was executed 10 times for a total of 40. So 160 cycles would be correct.</p>
<p>&#xA0;</p>
<p>This code was in my game Zirconium until I found that the FB2 doesn&apos;t do SBX (nor does PCAE.) So I recoded it <img alt=":(" src="scraper/images/atariage_icon_sad.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_sad.gif"></p>
</div><div class="mdl-card--border"></div>