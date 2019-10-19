<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1255235" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p>&#xA0;</p>
<p>I have often wanted to find the absolute value of a signed byte, usually I do something like this:</p>
<p></p>
<pre class="ipsCode">   lda v
  bpl FoundAbs
  lda #0
  sec
  sbc v
FoundAbs</pre>
<div></div>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>How about:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode"> lda v
 bpl .foundabs
 eor #$ff
 clc; not needed if the state of C is known up front
 adc #1; would be &quot;adc #0&quot;, if C is known to be set
.foundabs
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Not much of an improvement, but it does run 1 cycle faster if v is negative (or 3, if you can leave out the CLC).</p>
<p>&#xA0;</p>
<p>Reading over this thread, I can see that I need to learn how to use the illegal/undocumented opcodes. About the only ones I&apos;ve ever used are DCP and some of the extended NOPs (e.g. to sleep for 3 cycles).</p>
</div><div class="mdl-card--border"></div>