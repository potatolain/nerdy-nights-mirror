<div class="mdl-card__title"><strong>grafixbmpgrafixbmp</strong> posted on March 2, 2009March 2, 2009</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1694113" data-ipsquote-username="Nukey Shay" data-cite="Nukey Shay" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>5 bits? Is this for audio frequency? If so, are you aware that the upper 3 bits are irrelivant for these registers? Likewise, the upper 4 bits are irrelivant for distortion and volume registers.<p>&#xA0;</p>
<p>So you could use the original merged value to update frequency, then drop the upper 3 bits down (5xLSR) for one of the other registers.</p>
</div></blockquote>
<p>Yes. but I was more intrested in getting thoes last 3 bits ready ASAP for audio control. The other byte is used for sustain and rest duration. This is how long the volume is held and how long it is off. I was going to organize thoes 3 bits to cover the most usable distortion settings on the audio control register.</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2009-03-02T20:58:30Z" title="03/02/2009 08:58  PM" data-short="10 yr">March 2, 2009</time> by grafixbmp</strong>
</span>
</div><div class="mdl-card--border"></div>