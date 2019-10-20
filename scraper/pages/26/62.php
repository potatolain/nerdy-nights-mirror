<div class="mdl-card__title"><strong>+bataribatari</strong> posted on May 21, 2006</div><div class="mdl-card__supporting-text">
<p>Here&apos;s another one for the code wizards out there. I&apos;m trying to write some good code for 7-bit binary-&gt;8-bit BCD. Here&apos;s two examples I&apos;ve come up with:</p>
<p>&#xA0;</p>
<p>Obvious method (23 bytes):</p>
<p></p>
<pre class="ipsCode">; input: binary value in A

  ldx #$FF
  sec
count
  sbc #10
  inx
  bcs count
  adc #10
  ora table,x

; output: BCD value in A

table .byte $0,$10,$20,$30,$40,$50,$60,$70,$80,$90

</pre>
<div></div>
<p> </p>
<p>&#xA0;</p>
<p>&#xA0;</p>
<p>Obfuscated method: 19 bytes</p>
<p></p>
<pre class="ipsCode">; input: binary value in A

  ldx #8
  ldy #4
repeat
  dey
  bmi noadd
  cmp #$50
  bcc noadd
  adc #$2f
noadd
  cmp #$80
  rol
  dex
  bne repeat

; output: BCD value in A

</pre>
<div></div>
<p></p>
<p>Can anyone guess how #2 works?</p>
<p>&#xA0;</p>
<p>I&apos;m not satisfied with either though. It seems that there should be a better way, in terms of speed and cycles... Maybe something using the &quot;D&quot; flag?</p>
</div><div class="mdl-card--border"></div>