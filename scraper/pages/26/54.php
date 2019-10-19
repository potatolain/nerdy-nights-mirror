<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="supercat" data-cite="supercat" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="TROGDOR" data-cite="TROGDOR" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>The only thing to be careful with this is that the N, V, and Z flags will be corrupted.&#xA0; But the accumulator is not affected.&#xA0; So you&apos;ve just saved a byte.&#xA0; Also be wary that one extra cycle is used.&#xA0; BIT Absolute is 4 cycles, and a BMI branch is 3 cycles (or 4 if it crosses a page boundary.)<p></p>
<div style="text-align:right;"><p><a rel></a>986490[/snapback]</p></div>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Another thing to beware of is that certain memory locations can be affected by reads. In a 4K cart, this isn&apos;t apt to be a problem (the only thing affected by a read is the timer-interrupt flag on the RIOT which is cleared by reading INTIM). In a 16K or 32K cart, skipping &quot;INC nn,X&quot; or &quot;ISB nn,x&quot; will trigger a bank switch if &apos;nn&apos; is $1F, $3F, $5F, $7F, $9F, $BF, $DF, or $FF, but such an instruction isn&apos;t too likely to occur. In a 32K cart, skipping &quot;SBC nn,X&quot; will also trigger a bankswitch.</p>
<p>&#xA0;</p>
<p>None of those bankswitch hotspots is in practice likely to be a problem. On the other hand, RAM based carts open up a much bigger danger zone. On a Superchip cart, skipping any instruction whose opcode is $00-$7F and whose operand is $10, $30, $50, $70, $90, $B0, $D0, or $F0 will trash a byte of Superchip RAM. On a Supercharger, skipping any two-byte instruction whose operand is one of the above will be, to put it mildly, &quot;interesting&quot;.</p>
<p></p>
<div style="text-align:right;"><p><a rel></a>986508[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>Thanks for the heads-up supercat. I want to maintain Supercharger compatibility for all my programs, so it looks like I&apos;ll have to ditch my favorite hack. <img alt=":sad:" src="scraper/images/atariage_icon_frown.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_frown.gif"></p>
</div><div class="mdl-card--border"></div>