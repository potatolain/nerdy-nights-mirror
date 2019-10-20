<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on March 3, 2011</div><div class="mdl-card__supporting-text">
<p>Just saw this today:</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<strong>Average of Integers</strong><p>This is actually an extension of the &quot;well known&quot; fact that for binary integer values x and y, (x+y) equals ((x&amp;y)+(x|y)) equals ((x^y)+2*(x&amp;y)).</p>
<p>&#xA0;</p>
<p>Given two integer values x and y, the (floor of the) average normally would be computed by (x+y)/2; unfortunately, this can yield incorrect results due to overflow. A very sneaky alternative is to use (x&amp;y)+((x^y)/2). If we are aware of the potential non-portability due to the fact that C does not specify if shifts are signed, this can be simplified to (x&amp;y)+((x^y)&gt;&gt;1). In either case, the benefit is that this code sequence cannot overflow. </p>
</div></blockquote>
<p><a href="http://aggregate.ee.engr.uky.edu/MAGIC/#Average%20of%20Integers" rel="external nofollow">http://aggregate.ee.engr.uky.edu/MAGIC/#Average%20of%20Integers</a></p>
<p>&#xA0;</p>
<p>In 6502 assembly:</p>
<p></p>
<pre class="ipsCode">lda a
and b
sta temp

lda a
eor b
lsr
clc
adc temp</pre>
<div></div>
<p></p>
<p>Next question: extend to more than 2 integers, and is it possible to do without temp RAM?</p>
</div><div class="mdl-card--border"></div>