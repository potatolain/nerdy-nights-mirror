<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="872999" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>I like that version, nice use of LAX, but you gotta be brave and not use the temp <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"> <p>&#xA0;</p>
<p></p>
<pre class="ipsCode"> &#xA0; &#xA0;LAX word
&#xA0; &#xA0;INX
&#xA0; &#xA0;AND #$F0
&#xA0; &#xA0;STA word
&#xA0; &#xA0;TXA
&#xA0; &#xA0;AND #$0F
&#xA0; &#xA0;ORA word
&#xA0; &#xA0;STA word</pre>
<div></div>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>A late reply to the starting hack of this thread. If you got a free byte of memory space and you could initialise that before the loop this should be faster:</p>
<p>&#xA0;</p>
<p>At an init stage store the top 4 bits in a variable:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">lda word
and #$f0
sta hi</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>And in your loop when you are iterating and need the wraparound increment on lower 4 bits:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">ldx word ; 3
inx	  ; 2
txa	  ; 2
and #$0f ; 2
ora hi; 3
sta word ; 3</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Uses a total of 15 cycles, 4 less than the one quoted assuming word and hi are in zero page. <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
<p>&#xA0;</p>
<p>Well, if you can assume that your &quot;word&quot; variable bit 4 is always zero (so counter starts from one of $00,$20,$40,$60,$80,$a0,$c0,$e0) you could do this also:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">ldx word; 3
inx	 ; 2
txa	 ; 2
and #$ef; 2
sta word; 2</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Which is only 11 cycles! <img alt=":P" src="scraper/images/atariage_icon_razz.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_razz.gif"></p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2008-12-29T13:46:18Z" title="12/29/2008 01:46  PM" data-short="10 yr">December 29, 2008</time> by johncl</strong>
</span>
</div><div class="mdl-card--border"></div>