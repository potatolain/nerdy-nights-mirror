<div class="mdl-card__title"><strong>djmipsdjmips</strong> posted on March 4, 2011March 4, 2011</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="1689548" data-ipsquote-username="bogax" data-cite="bogax" data-ipsquote-timestamp="1235458816" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-contentcommentid="872906" data-ipsquote-username="djmips" data-cite="djmips" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>As I was growing up, I kept a notebook full of cool code snippets and ideas. My notebook had been misplaced but I ran across it recently and here is one of the pages which is from a 1987 Dr. Dobbs article by Mark S. Ackerman. &quot;6502 Killer Hacks&quot;.<p>&#xA0;</p>
<p><span style="color:#FF0000;">Post your own 6502 Killer Hacks and share them with the rest of us!</span></p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>Well here is the killer hack. This one is to scrimp on RAM.</p>
<p>&#xA0;</p>
<p>Incrementing only the lower 4 bits of a byte (with wrap)</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p> - David</p>
</div></blockquote>
<p>&#xA0;</p>
<p> Just joined these forums so sorry if I&apos;m a little late to this party <img alt=";)" src="scraper/images/atariage_icon_wink.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_wink.gif"></p>
<p>&#xA0;</p>
<p> Here&apos;s a couple of my favorites</p>
<p>&#xA0;</p>
<p> First the counter</p>
<p>&#xA0;</p>
<p> eor something with its self you get 0</p>
<p> eor something with 0 you get its self</p>
<p>&#xA0;</p>
<p></p>
<pre class="ipsCode"> lda counter
inc counter
eor counter
and #$F0
eor counter
sta counter</pre>
<div></div>
<p></p>
<p> Of course you can insert bits from one byte into another</p>
<p> byte (not just from a changed version of itself) </p>
<p> Used eg for setting pixels </p>
<p>&#xA0;</p>
<p></p>
</div></blockquote>
<p>&#xA0;</p>
<p>=========</p>
<p>&#xA0;</p>
<p> haven&apos;t read this thread for awhile (thanks to vdub to resurrect it so I would actually see some of the cool additions)</p>
<p>&#xA0;</p>
<p>This is more likely the original Ackerman &apos;hack&apos; for incrementing only the low 4 bits of a byte without requiring any additional memory. I think the other &apos;bad&apos; version must have been my own idle mind playing around with other ideas. Thanks bogax.</p>
<span class="ipsType_reset ipsType_medium ipsType_light" data-excludequote>
<strong>Edited <time datetime="2011-03-04T08:54:32Z" title="03/04/2011 08:54  AM" data-short="8 yr">March 4, 2011</time> by djmips</strong>
</span>
</div><div class="mdl-card--border"></div>