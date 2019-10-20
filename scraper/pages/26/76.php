<div class="mdl-card__title"><strong>UrchlayUrchlay</strong> posted on March 9, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253462" data-ipsquote-username="Thomas Jentzsch" data-cite="Thomas Jentzsch" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p>This is how I would do it:</p>
<pre class="ipsCode">	lda	 v	 ; 2
ldx	 #-1; 2
.count:
inx		; 2
.loop:
lsr		; 2
bcs	 .count; 2&#xB3;
bne	 .loop ; 2&#xB3;</pre>
<div></div>
<p></p>
<p>No someone do the math. <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Holy crap, *that* is a killer hack!</p>
<p>&#xA0;</p>
<p>10 cycles if v was 0, and 63 cycles if it was $FF (worst case)... in 10 bytes of code!</p>
<p>&#xA0;</p>
<p>Also, your version is optimized for lower numbers... the execution time depends on where the most significant set bit is, instead of the number of set bits like the Kernighan version (so your version is faster for $0F than it would be for $F0, even though both have 4 bits set).</p>
<p>&#xA0;</p>
<p>If I were wearing a hat, I&apos;d take it off to you <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
</div><div class="mdl-card--border"></div>