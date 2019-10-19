<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="2224284" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentclass="forums_Topic" data-ipsquote-contentid="71120" data-ipsquote-username="Thomas Jentzsch" data-cite="Thomas Jentzsch" data-ipsquote-timestamp="1299189465"><div><div>
<p>Why not</p>
<pre class="ipsCode prettyprint lang-auto">clc
  lda a 
  adc b
  ror</pre>?<p>&#xA0;</p>
</div></div></blockquote>
<p>This won&apos;t work because you could overflow if the numbers were both &gt; 128</p>
</div><div class="mdl-card--border"></div>