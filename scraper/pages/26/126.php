<div class="mdl-card__title"><strong>bogaxbogax</strong> posted on February 24, 2009</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="872906" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>As I was growing up, I kept a notebook full of cool code snippets and ideas. My notebook had been misplaced but I ran across it recently and here is one of the pages which is from a 1987 Dr. Dobbs article by Mark S. Ackerman. &quot;6502 Killer Hacks&quot;.<p>&#xA0;</p>
<p><span style="color:#FF0000;">Post your own 6502 Killer Hacks and share them with the rest of us!</span></p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>Well here is the killer hack. This one is to scrimp on RAM.</p>
<p>&#xA0;</p>
<p>Incrementing only the lower 4 bits of a byte (with wrap)</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p> - David</p>
</div></blockquote>
<p>&#xA0;</p>
<p> Just joined these forums so sorry if I&apos;m a little late to this party <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"></p>
<p>&#xA0;</p>
<p> Here&apos;s a couple of my favorites</p>
<p>&#xA0;</p>
<p> First the counter</p>
<p>&#xA0;</p>
<p> eor something with its self you get 0</p>
<p> eor something with 0 you get its self</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode"> lda counter
inc counter
eor counter
and #$F0
eor counter
sta counter</pre>
<div></div>
<p></p>
<p> Of course you can insert bits from one byte into another</p>
<p> byte (not just from a changed version of itself) </p>
<p> Used eg for setting pixels </p>
<p>&#xA0;</p>
<p>=========</p>
<p>&#xA0;</p>
<p> Parity is just an xoring of bits</p>
<p>&#xA0;</p>
<p> A simple sum is just an xoring of bits</p>
<p>&#xA0;</p>
<p> 0+0=0</p>
<p> 0+1=1</p>
<p> 1+0=1</p>
<p> 1+1=0</p>
<p>&#xA0;</p>
<p> Disregarding the carry obviously</p>
<p>&#xA0;</p>
<p> Carry is a way of propagating bits across a byte (sort of)</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">   000a
 +0111
 =a???</pre>
<div></div>
<p></p>
<p> We can combine the two to get parity and collect &quot;bits&quot; across a byte</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;parity of A

sta temp
asl
eor temp
and #b10101010
adc #b01100110
and #b10001000
adc #b01111000
;now the parity is in the sign bit</pre>
<div></div>
<p> </p>
<p>=========</p>
<p>&#xA0;</p>
<p> Already posted this to a different thread</p>
<p>&#xA0;</p>
<p> Rotate two bits left through the carry</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode"> asl
adc #$80
rol</pre>
<div></div>
<p></p>
<p>Do it twice to swap nibbles</p>
<p>&#xA0;</p>
<p>============</p>
<p>&#xA0;</p>
<p> Kernigans method for counting set bits in a byte</p>
<p>&#xA0;</p>
<p> This code lifted directly from dclxvi in the 6502.org</p>
<p> programming forum</p>
<p>&#xA0;</p>
<p> <a href="http://forum.6502.org/viewtopic.php?p=6993&amp;highlight=#6993" rel="external nofollow">http://forum.6502.org/viewtopic.php?p=6993...highlight=#6993</a></p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">   TAX 
  BEQ L2 
  LDX #0 
  SEC 
L1 INX 
  STA SCRATCH 
  SBC #1 
  AND SCRATCH 
  BNE L1 
  TXA 
L2 RTS</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>