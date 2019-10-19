<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>Here&apos;s my all-time favorite hack for the 6502. The &quot;skip 2 bytes&quot; pseudo-instruction, which piggybacks off the BIT instruction. It saves a byte when performing &quot;either/or&quot; branching.</p>
<p>&#xA0;</p>
<p>Consider the following example. You want to store a value in either Loc1 or Loc2, depending on whether it&apos;s negative. Normally, your code would look like:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">LDA MyNumber;2
BPL B1;2
STA Loc1;2
BMI Done;2 (This is effectively a BRA to Done.)
B1
STA Loc2;2
Done
</pre>
<div></div>
<p></p>
<p>It uses 10 bytes. Now consider this alternative:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">LDA MyNumber;2
BPL B1;2
STA Loc1;2
.BYTE $2C;1 (Skips the next 2 bytes, effectively doing a BRA to Done.)
B1
STA Loc2;2
Done
</pre>
<div></div>
<p></p>
<p>It only uses 9 bytes, and does the same thing. When the processor hits the &quot;.BYTE $2C&quot;, it reads this as an Absolute BIT command, which is a 3 byte command. So, it uses the two bytes of the STA Loc2 command as the argument to the BIT command, performs a meaningless BIT test, and then continues to run, without ever executing the STA Loc2 command. The only thing to be careful with this is that the N, V, and Z flags will be corrupted. But the accumulator is not affected. So you&apos;ve just saved a byte. Also be wary that one extra cycle is used. BIT Absolute is 4 cycles, and a BMI branch is 3 cycles (or 4 if it crosses a page boundary.)</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2005-12-21T06:53:06Z" title="12/21/2005 06:53  AM" data-short="13 yr">December 21, 2005</time> by TROGDOR</strong>
</span>
</div><div class="mdl-card--border"></div>