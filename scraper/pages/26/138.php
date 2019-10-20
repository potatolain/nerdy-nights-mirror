<div class="mdl-card__title"><strong>foxfox</strong> posted on March 31, 2009</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1071314" data-ipsquote-username="batari" data-cite="batari" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>After research, I came up with something really short (17 bytes)<p></p>
<pre class="ipsCode">; Binary in A

  sed
  sta temp1
  lda #0
  ldx #8
loop
  asl temp1
  sta temp2
  adc temp2
  dex
  bne loop
  cld

; BCD in A</pre>
<div></div>
<p></p>
<p>What&apos;s cool about this one is that it actually will do 8-bit binary -&gt; 9-bit BCD, with the 9th bit contained in the carry! Can this be improved any more, though?</p>
</div></blockquote>
<p>&#xA0;</p>
<p>Faster, one byte shorter and not using X:</p>
<p></p>
<pre class="ipsCode">	sec
rol	@
sta	bin
lda	#0
sed
do_bit
sta	bcd
adc	bcd
asl	bin
bne	do_bit
cld</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>