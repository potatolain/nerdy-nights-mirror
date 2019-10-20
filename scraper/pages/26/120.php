<div class="mdl-card__title"><strong>Robert MRobert M</strong> posted on January 24, 2008</div><div class="mdl-card__supporting-text">
<p>Okay, I did a spreadsheet in Excel to prove this to myself. </p>
<p>&#xA0;</p>
<p>0.8 * 8.8 = 8.16</p>
<p>&#xA0;</p>
<p>but we are throwing the lower 8 bits of the answer away which makes the problem this:</p>
<p>&#xA0;</p>
<p>0.8 * 8.8 = 8.16 / 256</p>
<p>&#xA0;</p>
<p>We want to move the division by 256 to the left side of the equation, which because it is applied after the multiplication we must take the square root of 256. That is 16, so:</p>
<p>&#xA0;</p>
<p>(0.8 / 16) * (8.8 / 16) = 8.16 / 256 [Excel says I am right <img alt=":ponder:" src="scraper/images/atariage_icon_ponder.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_ponder.gif"> ] </p>
<p>&#xA0;</p>
<p>So the problem reduces to:</p>
<p>&#xA0;</p>
<p>0.4 * 8.4 = 8.8 </p>
<p>&#xA0;</p>
<p>I don&apos;t know if that makes the code easier, but it should get the same answer as the original (0.8 * 8.8)/256 minus a small rounding error.</p>
</div><div class="mdl-card--border"></div>