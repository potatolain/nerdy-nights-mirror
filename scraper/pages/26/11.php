<div class="mdl-card__title"><strong>vdub_bobbyvdub_bobby</strong> posted on June 13, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="Cybergoth" data-cite="Cybergoth" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Hi there!<p>&#xA0;</p>
<p>To contribute something myself, here&apos;s an IMO very usefull bit I wrote for Gunfight back then and which I&apos;m using one way or another in Star Fire and Crazy Balloon as well.</p>
<p>&#xA0;</p>
<p>It checks wether a point is within a rectangle (software collision detection!):</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">&#xA0; LDA rect.right
&#xA0; SBC point.x
&#xA0; BMI NoHit
&#xA0; SBC rect.width
&#xA0; BPL NoHit
&#xA0; LDA rect.top
&#xA0; SBC point.y
&#xA0; BMI NoHit
&#xA0; SBC rect.height
&#xA0; BPL NoHit
&#xA0;;BANG!
NoHit
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Greetings,</p>
<p>Manuel</p>
<p></p>
<div style="text-align:right;"><p><a rel></a>873320[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>Here&apos;s the software collision routine I worked up for Go Fish!</p>
<p>A little different - I use it to check if two boxes overlap. Call it once for X values, then call it again with Y values.</p>
<p></p>
<pre class="ipsCode">CheckBoundaries
&#xA0; &#xA0; &#xA0; &#xA0;lda rect1.leftortop
&#xA0; &#xA0; &#xA0; &#xA0;cmp rect2.leftortop
&#xA0; &#xA0; &#xA0; &#xA0;bmi Check2
&#xA0; &#xA0; &#xA0; &#xA0;cmp rect2.rightorbottom
&#xA0; &#xA0; &#xA0; &#xA0;bmi InsideBoundingBox
Check2
&#xA0; &#xA0; &#xA0; &#xA0;lda rect2.leftortop
&#xA0; &#xA0; &#xA0; &#xA0;cmp rect1.leftortop
&#xA0; &#xA0; &#xA0; &#xA0;bmi NotInsideBoundingBox
&#xA0; &#xA0; &#xA0; &#xA0;cmp rect1.rightorbottom
&#xA0; &#xA0; &#xA0; &#xA0;bpl NotInsideBoundingBox
InsideBoundingBox
&#xA0; &#xA0; &#xA0; &#xA0;sec
&#xA0; &#xA0; &#xA0; &#xA0;rts
NotInsideBoundingBox
&#xA0; &#xA0; &#xA0; &#xA0;clc
&#xA0; &#xA0; &#xA0; &#xA0;rts</pre>
<div></div>
<p></p>
</div><div class="mdl-card--border"></div>