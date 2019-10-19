<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>This is how I would do it:</p>
<pre class="ipsCode">	lda	 v	  ; 2
ldx	 #-1	; 2
.count:
inx			; 2
.loop:
lsr			; 2
bcs	 .count ; 2&#xB3;
bne	 .loop  ; 2&#xB3;</pre>
<div></div>
<p></p>
<p>No someone do the math. <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
</div><div class="mdl-card--border"></div>