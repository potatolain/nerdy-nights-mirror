<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Some code courtesy of <p>&#xA0;</p>
<p><a href="http://members.lycos.co.uk/leeedavison/6502/shorts/index.html" rel>Lee Davison 6502 code &apos;shorts&apos;</a></p>
<p></p>
<div style="text-align:right;"><p><a rel></a>962533[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>I like his hex-digit conversion routine. Saves a byte over the one I normally use if the state of carry on entry is unknown. I also like his &apos;toggle carry&apos; method, though I still find myself wishing the 6502 allowed a direct method to do that.</p>
<p>&#xA0;</p>
<p>BTW, one thing that&apos;s often useful is the &quot;cookie cutter&quot; operation. For example, to store bits 3-5 of the accumulator into a memory location while leaving the other bits untouched:</p>
<p></p>
<pre class="ipsCode">&#xA0;eor dest
&#xA0;and #$38; bits 3-5
&#xA0;eor dest
&#xA0;sta dest
</pre>
<div></div>
<p></p>
<p>If you want to read bits 3-5 of a memory location into the corresponding bits of the accumulator, you may similarly do:</p>
<p></p>
<pre class="ipsCode">&#xA0;eor src
&#xA0;and #$C7 ; not bits 3-5
&#xA0;eor src
</pre>
<div></div>
<p></p>
<p>but there&apos;s a very important proviso here: src MUST NOT change between the two &apos;eor&apos; instructions. Any bit of src which changes between those instructions will cause the corresponding bit in the accumulator to be toggled if not in the range of bit 3..5.</p>
</div><div class="mdl-card--border"></div>