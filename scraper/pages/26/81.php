<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253514" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
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
<p></p>
</div></blockquote>
<p>Nice! <img alt=":lust:" src="scraper/images/atariage_icon_lust.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_lust.gif"></p>
</div><div class="mdl-card--border"></div>