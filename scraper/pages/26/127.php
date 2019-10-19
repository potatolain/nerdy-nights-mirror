<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1689548" data-ipsquote-username="bogax" data-cite="bogax" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Kernigans method for counting set bits in a byte<p>&#xA0;</p>
<p> This code lifted directly from dclxvi in the 6502.org</p>
<p> programming forum</p>
<p>&#xA0;</p>
<p> <a href="http://forum.6502.org/viewtopic.php?p=6993&amp;highlight=#6993" rel="external nofollow">http://forum.6502.org/viewtopic.php?p=6993...highlight=#6993</a></p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">   TAX 
  BEQ L2 
  LDX #0 
  SEC 
L1 INX 
  STA SCRATCH 
  SBC #1 
  AND SCRATCH 
  BNE L1 
  TXA 
L2 RTS</pre>
<div></div>
<p></p>
</div></blockquote>
<p>A simple shifting approach is more efficient in terms of size (and in many cases, cycles) than any other routine I saw on that thread.</p>
<p>&#xA0;</p>
<p>They all start with the value passed in the accumulator and return the accumulator, so I&apos;ll do the same:</p>
<p></p>
<pre class="ipsCode">  sta temp
 lda #0
loop
 asl temp
 beq done
 adc #0
 bcc loop
done</pre>
<div></div>
<p></p>
<p>I&apos;m sure this can be improved somehow.</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2009-02-24T07:56:31Z" title="02/24/2009 07:56  AM" data-short="10 yr">February 24, 2009</time> by batari</strong>
</span>
</div><div class="mdl-card--border"></div>