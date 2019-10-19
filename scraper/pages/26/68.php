<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1252071" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<p>This isn&apos;t exactly a 6502 Killer hack but I wanted to share this link.</p>
<p>&#xA0;</p>
<p><a href="http://graphics.stanford.edu/~seander/bithacks.html" rel="external nofollow">http://graphics.stanford.edu/~seander/bithacks.html</a></p>
<p>&#xA0;</p>
<p>There you will find some useful methods that apply to your 6502 coding.</p>
<p></p>
</div></blockquote>
<p>Some of those are pretty cool.</p>
<p>&#xA0;</p>
<p>I thought I&apos;d translate some of them to 6502 assembly:</p>
<p></p>
<pre class="ipsCode">Counting bits set, Brian Kernighan&apos;s way

unsigned int v; // count the number of bits set in v
unsigned int c; // c accumulates the total bits set in v
for (c = 0; v; c++)
{
 v &amp;= v - 1; // clear the least significant bit set
}
</pre>
<div></div>
<p></p>
<p>Assembly:</p>
<p></p>
<pre class="ipsCode">;--count set bits in v
;  trashes v, accumulator, result is in c

  lda #0
  sta c
Loop
  lda v
  beq Done
  inc c
  dec v
  and v
  sta v
  bne Loop
Done</pre>
<div></div>
<p></p>
<p>Seems like that should be improveable.</p>
</div><div class="mdl-card--border"></div>