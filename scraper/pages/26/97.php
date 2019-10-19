<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>Here&apos;s another interesting approach:</p>
<p></p>
<pre class="ipsCode">; Enter at s0
s4:
 asl
 bcs s4
 beq done_bad
s3:
 asl
 bcs s2
s1:
 asl
 bcs s3
s2:
 asl
 bcc s4
s0:
 asl
 bcs s1
 bne s0
done_good:
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>