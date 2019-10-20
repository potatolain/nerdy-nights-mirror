<div class="mdl-card__title"><strong>UrchlayUrchlay</strong> posted on March 10, 2007</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1253554" data-ipsquote-username="Urchlay" data-cite="Urchlay" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p>However, TJ is probably about to post something that blows all this code away <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>This isn&apos;t up to TJ&apos;s standards, but I just thought of another solution in the shower:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">; destructively test to see if the accumulator is a power of two
; on exit, A is trashed, X and Y are preserved, and Z is set if A was a power of two
is_a_power_of_2: subroutine; {
 cmp #0; Test for special case A==0
 bne .loop
 adc #1; another &quot;CLZ&quot;
 rts

; All powers of two have only one bit set!
.loop; {
; This loop terminates when we find a set bit
 lsr
 bcc .loop
;   }

 rts; If we found a set bit, the Z flag will be set if that was the *only* set bit
; }
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>That would actually be kind of elegant, if it weren&apos;t for the need to test for the special A==0 case <img alt=":(" src="scraper/images/atariage_icon_sad.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_sad.gif"></p>
</div><div class="mdl-card--border"></div>