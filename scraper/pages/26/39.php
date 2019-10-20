<div class="mdl-card__title"><strong>djmipsdjmips</strong> posted on November 9, 2005</div><div class="mdl-card__supporting-text">
<p>Some code courtesy of </p>
<p>&#xA0;</p>
<p><a href="http://members.lycos.co.uk/leeedavison/6502/shorts/index.html" rel original-href="http://members.lycos.co.uk/leeedavison/6502/shorts/index.html">Lee Davison 6502 code &apos;shorts&apos;</a></p>
<p>&#xA0;</p>
<p>Range test. By Lee Davison</p>
<p>&#xA0;</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>For all of these we assume that the byte to be tested is in A and that the start and end values, n and m, are already defined. Also that 0 &lt; n &lt; m &lt; $FF. <p>If you don&apos;t need to preserve the byte in A then testing the byte can be done in five bytes and only six cycles. This sets the carry if A is in the range n to m. </p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">CLC	; clear carry for add
ADC	#$FF-m; make m = $FF
ADC	#m-n+1; carry set if in range n to m	
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>