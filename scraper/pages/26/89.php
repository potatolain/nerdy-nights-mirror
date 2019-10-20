<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on March 12, 2007March 12, 2007</div><div class="mdl-card__supporting-text">
<p>Cool! Here&apos;s another one:</p>
<p>&#xA0;</p>
<p>Modulus.</p>
<p>&#xA0;</p>
<p>I need to find n mod 20. Well, to be specific, I need to find if n mod 20 is zero or otherwise.</p>
<p>Here&apos;s how I do it:</p>
<p></p>
<pre class="ipsCode">   lda n
  sec
Loop
  sbc #20
  bcc Remainder
  bne Loop
;--remainder is zero</pre>
<div></div>
<p></p>
<p>Which is slow. Is there a better way?</p>
<p>&#xA0;</p>
<p>EDIT: And another:</p>
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
<p>Which is ok, I guess. The website djmips posted has this non-branching solution:</p>
<p></p>
<pre class="ipsCode">Compute the integer absolute value (abs) without branching

int v;	  // we want to find the absolute value of v
int r;	  // the result goes here 
int const mask = v &gt;&gt; sizeof(int) * CHAR_BIT - 1;

r = (v + mask) ^ mask;

Patented variation:

r = (v ^ mask) - mask;</pre>
<div></div>
<p></p>
<p>Which I translated into 6502 assembly; seems a bit messy:</p>
<p></p>
<pre class="ipsCode">   lda v
  eor #$80
  asl
  sta temp
  sbc temp
  sta temp
  clc
  adc v
  eor temp</pre>
<div></div>
<p></p>
<p>Any improvements on either routine?</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2007-03-12T18:11:34Z" title="03/12/2007 06:11  PM" data-short="12 yr">March 12, 2007</time> by vdub_bobby</strong>
</span>
</div><div class="mdl-card--border"></div>