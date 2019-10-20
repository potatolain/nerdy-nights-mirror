<div class="mdl-card__title"><strong>+bataribatari</strong> posted on May 21, 2006May 21, 2006</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1071119" data-ipsquote-username="Rybags" data-cite="Rybags" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Quickly written... probably more cycles - table values adjusted since carry will be set for add.</div></blockquote>
<p>Actually it might be quicker in terms of cycles, but it is quite a bit longer.</p>
<p>&#xA0;</p>
<p>After research, I came up with something really short (17 bytes)</p>
<p></p>
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

; BCD in A
</pre>
<div></div>
<p></p>
<p>What&apos;s cool about this one is that it actually will do 8-bit binary -&gt; 9-bit BCD, with the 9th bit contained in the carry! Can this be improved any more, though?</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2006-05-21T21:34:47Z" title="05/21/2006 09:34  PM" data-short="13 yr">May 21, 2006</time> by batari</strong>
</span>
</div><div class="mdl-card--border"></div>