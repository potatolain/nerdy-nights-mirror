<div class="mdl-card__title"><strong></strong> posted on </div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="873438" data-ipsquote-username="vdub_bobby" data-cite="vdub_bobby" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Here&apos;s the software collision routine I worked up for Go Fish!<p>A little different - I use it to check if two boxes overlap. Call it once for X values, then call it again with Y values.</p>
<p></p>
<pre class="ipsCode">CheckBoundaries
	lda rect1.leftortop
	cmp rect2.leftortop	  [*]
	bmi Check2
	cmp rect2.rightorbottom
	bmi InsideBoundingBox
Check2
	lda rect2.leftortop
	cmp rect1.leftortop	 [*]
	bmi NotInsideBoundingBox
	cmp rect1.rightorbottom
	bpl NotInsideBoundingBox
InsideBoundingBox
	sec
	rts
NotInsideBoundingBox
	clc
	rts
</pre>
<div></div>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>I was looking back through this thread for a collision detection routine for my Juno First game, and the above routine looks like it will be ideal. However, if I am not mistaken, the comparisons marked [*] are the inverse of each other, so I think the code can be simplified as follows:</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode">CheckBoundaries
	lda rect1.leftortop
	cmp rect2.leftortop  
	bmi Check2
	cmp rect2.rightorbottom
	bmi InsideBoundingBox
NotInsideBoundingBox
	clc
	rts
Check2
	lda rect2.leftortop
	cmp rect1.rightorbottom
	bpl NotInsideBoundingBox
InsideBoundingBox
	sec
	rts
</pre>
<div></div>
<p></p>
<p>&#xA0;</p>
<p>Chris</p>
</div><div class="mdl-card--border"></div>