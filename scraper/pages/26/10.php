<div class="mdl-card__title"><strong>CybergothCybergoth</strong> posted on June 13, 2005</div><div class="mdl-card__supporting-text">
<p>Hi there!</p>
<p>&#xA0;</p>
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
&#xA0;&#xA0;;BANG!
NoHit
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Greetings,</p>
<p>Manuel</p>
</div><div class="mdl-card--border"></div>