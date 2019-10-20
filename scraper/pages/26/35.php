<div class="mdl-card__title"><strong>djmipsdjmips</strong> posted on July 22, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Basically, you&apos;re replacing division by a constant with multiplication by a constant.&#xA0; This is an optimization approach which goes back at least to the 1960&apos;s, and probably even earlier.&#xA0; It&apos;s often an effective approach, but one needs to be careful to ensure that the results will aways be rounded in the expected direction (if one cares).<p>&#xA0;</p>
<p>By the way, there are some interesting table-based approaches to multiplication by non-constants which can be somewhat practical if one is doing a lot of multiplication, but require some care to ensure correct operation.&#xA0; One nice method, for example, takes advantage of the fact that A*A-B*B = (A+B)*(A-B).</p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>goes back to at <em>least</em> the 1960&apos;s <img alt=":D" src="scraper/images/atariage_icon_mrgreen.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_mrgreen.gif"> </p>
<p>&#xA0;</p>
<p>Both the multiply by 1/x and using the tables of squares for multiplication can be traced back to the Babylonians (2000-600BC) </p>
<p>&#xA0;</p>
<p>The formula is:</p>
<p>ab = [(a+b)^2 - (a-b)^2]/4 </p>
<p>&#xA0;</p>
<p><a href="http://www.bath.ac.uk/~ma2jc/babylonian.html" rel="external nofollow" original-href="http://www.bath.ac.uk/~ma2jc/babylonian.html">Babylonian Mathematics</a></p>
<p>&#xA0;</p>
<p>There are also the useful: sqrt(a^2 + b) approx = a + b/2a </p>
<p>&#xA0;</p>
<p>There are several variations on this code and the following mores specialized version is attributed to Stephen Judd at C=Hacking (noted in old Stella post) and is 24-26 cycles at the expense of some range. Multiplying several numbers by a particular number is quite fast as you just need to reload Y each time.</p>
<p>&#xA0;</p>
<p><a href="scraper/files/c=hacking9.txt" rel="external nofollow" original-href="http://www.ffd2.com/fridge/chacking/c=hacking9.txt">Fast Signed Multiply</a></p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">; &#xA0; &#xA0; &#xA0; &#xA0;Multiply Y * A and result in A

STA ZP1	;ZP1 -- zero page pointer to table of g(x)
EOR #$FF
CLC
ADC #$01
STA ZP2	;ZP2 also points to g(x)
LDA (ZP1),Y;g(Y+A)
SEC
SBC (ZP2),Y;g(Y-A)

</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>