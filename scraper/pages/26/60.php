<div class="mdl-card__title"><strong>supercatsupercat</strong> posted on April 19, 2006</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1053871" data-ipsquote-username="cd-w" data-cite="cd-w" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>I was looking back through this thread for a collision detection routine for my Juno First game, and the above routine looks like it will be ideal. However, if I am not mistaken, the comparisons marked [*] are the inverse of each other, so I think the code can be simplified as follows:</div></blockquote>
<p>&#xA0;</p>
<p>If one is trying to determine whether two objects of fixed size are overlapping, why not just use:</p>
<p></p>
<pre class="ipsCode"> ; Start with carry clear
 lda xpos1
 sbc xpos2 ; Note will subtract n-1
 sbc #SIZE2-1
 adc #SIZE1+SIZE2-1 ; Carry set if overlap
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
</div><div class="mdl-card--border"></div>