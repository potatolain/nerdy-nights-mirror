<div class="mdl-card__title"><strong>Nukey ShayNukey Shay</strong> posted on February 24, 2009</div><div class="mdl-card__supporting-text">
<p>How about this?</p>
<p>A bit smaller using the X register to count:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">;A=byte value
  ldx #-1
Bump_Count
  inx
Next_Bit
  lsr
  bcs Bump_Count
  bne Next_Bit
;X=number of set bits, A=0</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>