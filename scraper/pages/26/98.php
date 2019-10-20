<div class="mdl-card__title"><strong>djmipsdjmips</strong> posted on May 21, 2007May 24, 2007</div><div class="mdl-card__supporting-text">
<p><a href="https://en.wikipedia.org/wiki/Arithmetic_shift" rel="external nofollow" original-href="https://en.wikipedia.org/wiki/Arithmetic_shift">Arithmetic Shifts</a></p>
<p>-------------------</p>
<p>&#xA0;</p>
<p>For signed shifting you need to use an arithmetic shift.</p>
<p>&#xA0;</p>
<p>The consensus on how to do a single arithmetic shift right is.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">  cmp #$80
 ror</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>And here is the code for when you are doing 4 or more bits at once. 4 in this example.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">  lsr
 lsr
 lsr
 lsr
 clc
 adc #$F8
 eor #$F8</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>For an arithmetic shift left, you can just use ASL but it doesn&apos;t correctly set the overflow flag. If you need to check the overflow flag then use the following code sequence.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">   clc
  sta temp
  adc temp</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Credits - Lee Davison, TJ</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2007-05-24T17:20:23Z" title="05/24/2007 05:20  PM" data-short="12 yr">May 24, 2007</time> by djmips</strong>
</span>
</div><div class="mdl-card--border"></div>