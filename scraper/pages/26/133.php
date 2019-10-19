<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<p>5 bits? Is this for audio frequency? If so, are you aware that the upper 3 bits are irrelivant for these registers? Likewise, the upper 4 bits are irrelivant for distortion and volume registers.</p>
<p>&#xA0;</p>
<p>So you could use the original merged value to update frequency, then drop the upper 3 bits down (5xLSR) for one of the other registers.</p>
</div><div class="mdl-card--border"></div>