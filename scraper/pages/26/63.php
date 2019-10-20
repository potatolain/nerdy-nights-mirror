<div class="mdl-card__title"><strong>RybagsRybags</strong> posted on May 21, 2006</div><div class="mdl-card__supporting-text">
<p>Quickly written... probably more cycles - table values adjusted since carry will be set for add.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">tay 
and #3; starting figure (0-7) 
pha 
tya 
lsr a 
lsr a
lsr a 
sta ztemp 
pla 
ldx #4
loop:  lsr ztemp 
bcc noadd 
adc dectab-1,x 
noadd:  dex 
bne loop
rts 
dectab .byte $63,$31,$15,$07
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Another tip: Instead of using branch, load/or, etc in certain conditions, you can just use the Processor Status, e.g. preserve bit 7 of a location.</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">Lda (screen),y
php
&lt;other stuff&gt;
plp
and #$80
ora newchar
sta (screen),y
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>I used a similar technique to preserve bit 7 of screen data in a softsprite routine - so that multicolour bitpair 11 still uses the right playfield.</p>
<p>&#xA0;</p>
<p>Handily, the N and V flags and bit 7 and 6, so something like a BIT instruction followed by PHP will preserve the bit values for later processing.</p>
</div><div class="mdl-card--border"></div>