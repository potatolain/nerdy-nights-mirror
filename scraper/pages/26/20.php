<div class="mdl-card__title"><strong>djmipsdjmips</strong> posted on June 16, 2005</div><div class="mdl-card__supporting-text">
<p>Here&apos;s a killer hack from the stella archives. It&apos;s near and dear to me because it is a key component used in most of the modern moving 48 wide sprite code ( like my Amiga Boing demo 2.0 (derived from R. Kudla/ E. Stolberg) . It is also used in the various Fu Kung demos from A. Davies)</p>
<p>&#xA0;</p>
<p>Also, it is very cool. Definately a killer hack.</p>
<p>&#xA0;</p>
<p>It was originally posted by the late Jim Nitchals on Mar 18 1998</p>
<p>&#xA0;</p>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Hi,<p>&#xA0;</p>
<p>Here&apos;s a way to implement single cycle resolution without the use of the</p>
<p>carry flag (which adds overhead in the setup and at the end):</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">; A is assumed to hold the delay value plus the offset address of JumpTable.
; Or, you can align JumpTable to a page boundary.

&#xA0;sta indjmp
&#xA0;jmp (indjmp) ; point indjmp+1 to JumpTable somewhere in your init code

JumpTable:
&#xA0;dc.b $C9
&#xA0;dc.b $C9
; repeat as many $C9&apos;s as you need for the maximum number of cycles you
; you need to delay by.
&#xA0;dc.b $C9 &#xA0; &#xA0; ; opcode: CMP immediate (4 cycles: uses the $C5, executes
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; the NOP below.)
&#xA0;dc.b $C5 &#xA0; &#xA0; ; opcode: CMP zero page (3 cycles, uses up the NOP as a
&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; destination address of $EA)
&#xA0;nop &#xA0; &#xA0; &#xA0; &#xA0; &#xA0;; opcode: NOP (2 cycles by itself)
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>You may find the reduced overhead of this technique useful.</p>
<p></p>
</div></blockquote>
</div><div class="mdl-card--border"></div>