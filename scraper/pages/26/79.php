<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on March 9, 2007March 9, 2007</div><div class="mdl-card__supporting-text">
<p>Thanks. <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"></p>
<p>&#xA0;</p>
<p>EDIT: How about this one:</p>
<p></p>
<pre class="ipsCode">Determining if an integer is a power of 2

unsigned int v; // we want to see if v is a power of 2
bool f;		 // the result goes here 

f = (v &amp; (v - 1)) == 0;

Note that 0 is incorrectly considered a power of 2 here. To remedy this, use:

f = !(v &amp; (v - 1)) &amp;&amp; v;</pre>
<div></div>
<p></p>
<p>What&apos;s the killer 6502 hack for this? I&apos;ve come up with this:</p>
<p></p>
<pre class="ipsCode">   lda v
  dec v
  and v
  inc v</pre>
<div></div>
<p></p>
<p>Which returns zero in the accumulator if v is a power of two and anything else if it isn&apos;t. And preserves v.</p>
<p>&#xA0;</p>
<p>Except it doesn&apos;t handle v==0 and I&apos;d rather have it return 0 if false and anything else if true.</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2007-03-09T23:34:58Z" title="03/09/2007 11:34  PM" data-short="12 yr">March 9, 2007</time> by vdub_bobby</strong>
</span>
</div><div class="mdl-card--border"></div>