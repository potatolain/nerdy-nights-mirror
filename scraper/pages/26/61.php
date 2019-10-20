<div class="mdl-card__title"><strong>cd-wcd-w</strong> posted on April 20, 2006April 20, 2006</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1054049" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>If one is trying to determine whether two objects of fixed size are overlapping, why not just use:<p></p>
<pre class="ipsCode">; Start with carry clear
 lda xpos1
 sbc xpos2; Note will subtract n-1
 sbc #SIZE2-1
 adc #SIZE1+SIZE2-1; Carry set if overlap
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>If SIZE1=4 and SIZE2=8, xpos1=20...</p>
<p>- If xpos2=24, the first SBC yields $FB (no carry) and the second, $F3 (carry set). The ADC generates no carry.</p>
<p>- If xpos2=12, the first SBC yields $07 (carry set) and the second, $00 (carry set). Again, the ADC generates no carry.</p>
<p>&#xA0;</p>
<p>- If xpos2=23, the first SBC yields $FC (no carry) and the second, $F4 (carry set). The ADC generates carry.</p>
<p>- If xpos2=13, the first SBC yields $06 (carry set) and the second, $FF (carry clear). Again, the ADC generates carry.</p>
</div></blockquote>
<p>&#xA0;</p>
<p>This seems to be an even better approach, and is particularly useful for me as it has a constant cycle count. I wish I could write code like this, but I always seem to have trouble figuring the arithmetic <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"> Incidentally, I implemented the previous version which I posted above and it works fine.</p>
<p>&#xA0;</p>
<p>Chris</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2006-04-20T11:03:27Z" title="04/20/2006 11:03  AM" data-short="13 yr">April 20, 2006</time> by cd-w</strong>
</span>
</div><div class="mdl-card--border"></div>