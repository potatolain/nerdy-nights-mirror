<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>List &apos;em first. %sssssccc. It&apos;s only 2 cycles to AND off the upper bits...and by using LAX, you don&apos;t need to reload (the original value is still in X).</p>
<p>&#xA0;</p>
<p>LAX tablevalue</p>
<p>AND #7</p>
<p>STA AUDCn</p>
<p>TXA</p>
<p>LSR</p>
<p>LSR</p>
<p>LSR</p>
</div><div class="mdl-card--border"></div>