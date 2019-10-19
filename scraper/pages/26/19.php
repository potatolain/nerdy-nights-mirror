<div class="mdl-card__title"><strong>+bataribatari</strong> posted on June 15, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="Bruce Tomlin" data-cite="Bruce Tomlin" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>...but you better not be tight for cycles!<p>&#xA0;</p>
<p>That adds 6 cycles after the STA WSYNC, and 10 before it.</p>
<p>&#xA0;</p>
<p>In Red Box/Blue Box there were only a few places that I could JSR to a copy of my DoSound macro, and it saved a LOT of bytes when I did.&#xA0; There were only a few places because I only had 15 cycles to spare on each scan line after the DoSound macro.&#xA0; It would have only been 11 except that I saved 4 cycles from using LAX.</p>
<p></p>
<div style="text-align:right;"><p><a rel></a>875071[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>Yeah, there were lots of places where I couldn&apos;t use this trick.</p>
<p>&#xA0;</p>
<p>But I think if you&apos;re already using this trick, I think you could use it to create an <strong>8 byte VSYNC!</strong></p>
<p>&#xA0;</p>
<p>Now, this assumes that BRK/RTI will restore flags on returning. It does, right? If so, then this should work when SP=$FF and you use it right after your INTIM loop, like this:</p>
<p>.1</p>
<p> LDX INTIM</p>
<p> BNE .1 </p>
<p>&#xA0;</p>
<p>so you are certain X=0 and the Z flag is 1. Anyway:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">; 8 byte VSYNC!
BRK;STA WSYNC, plus restore flags (?)
TXS;stack pointer = 0, which is VSYNC
PHP;Z=1, which writes a 1 to bit 1 of VSYNC
BRK
BRK
BRK
STX VSYNC
</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>