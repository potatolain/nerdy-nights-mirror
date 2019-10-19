<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1255235" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Cool! Here&apos;s another one:<p>&#xA0;</p>
<p>Modulus.</p>
<p>&#xA0;</p>
<p>I need to find n mod 20. Well, to be specific, I need to find if n mod 20 is zero or otherwise.</p>
<p>Here&apos;s how I do it:</p>
<p></p>
<pre class="ipsCode">   lda n
  sec
Loop
  sbc #20
  bcc Remainder
  bne Loop
;--remainder is zero</pre>
<div></div>
<p></p>
<p>Which is slow. Is there a better way?</p>
</div></blockquote>
<p>&#xA0;</p>
<p>&#xA0;</p>
<p>That division by 5 is nasty for optimization. Instead I recommend dividing by 40 so that the average number of times through the loop is cut in half plus 1 add instruction. Its slower for some cases, but I estimate about 45% faster on average. </p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">Modulo20
 ; input: A = the unsigned number to test (0 to 255)
  tax ; Need to set Z-flag for special case that A is already 0.  ( your original code did not do this so it may not be important.)
  sec
loop
  beq done
  sbc #40
  bcs loop
 ; C = 0
  adc #20
done
 ; Z = 1 if the input number was a multiple of 20.
 ; X = the original number
 ; A = garbage.</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>