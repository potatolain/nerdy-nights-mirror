<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451938" data-ipsquote-username="Thomas Jentzsch" data-cite="Thomas Jentzsch" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1451915" data-ipsquote-username="Robert M" data-cite="Robert M" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>0.4 * 8.4 = 8.8</div></blockquote>
<p>Or e.g. 0.2 * 8.6? <img alt=":ponder:" src="scraper/images/atariage_icon_ponder.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_ponder.gif"></p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>&#xA0;</p>
<p>&#xA0;</p>
<p>Okay my shorthand was too short <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"> </p>
<p>&#xA0;</p>
<p>8.8 means 8 bits integer and 8 bits fraction. </p>
<p>&#xA0;</p>
<p>so the original equation was ([0].[8] * [8].[8]) &gt;&gt; 8 , where &gt;&gt; 8 is the same as /256</p>
<p>&#xA0;</p>
<p>I am saying you can divide the arguments before you multiply and get the same answer with less multiplying and the same amount of dividing.</p>
<p>&#xA0;</p>
<p>(([0].[8] &gt;&gt; 4) * ([8].[8] &gt;&gt; 4)) == ([0].[8] * [8].[8]) &gt;&gt; 8</p>
<p>&#xA0;</p>
<p>The original equation on the right is easier to round after the divide by bitshift since you can just add the .5 in the carry back into the answer.</p>
<p>The new equation has two shifts and you would need to remember the carry from both and round up the answer by one only if both were set.</p>
<p>The equation on the left after the shift is a nybble * 12 bits which I think should be easier than a byte times 16 bits. Just the rounding gets </p>
<p>tougher. I will try to come up with some code shortly.</p>
</div><div class="mdl-card--border"></div>