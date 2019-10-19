<div class="mdl-card__title"><strong>+bataribatari</strong> posted on June 13, 2005</div><div class="mdl-card__supporting-text">
<blockquote data-ipsquote class="ipsQuote" data-ipsquote-username="Cybergoth" data-cite="Cybergoth" data-ipsquote-contentapp="forums" data-ipsquote-contenttype="forums" data-ipsquote-contentid="71120" data-ipsquote-contentclass="forums_Topic"><div>Hi there!<p>&#xA0;</p>
<p>The last 2 instructions should rather be SBC and STA I think <img alt=":)" src="scraper/images/atariage_icon_smile.gif" original-src="https://atariage.com/forums/uploads/emoticons/atariage_icon_smile.gif"></p>
<p>&#xA0;</p>
<p>And, to make it totally failproof, you&apos;d probably need to add a SEC before the subtraction.</p>
<p>&#xA0;</p>
<p>Greetings,</p>
<p>Manuel</p>
<p></p>
<div style="text-align:right;"><p><a rel></a>873284[/snapback]</p></div>
<p></p>
<p></p>
<p></p>
</div></blockquote>
<p>Actually, SBX is an illegal opcode that stores to X the result of (A&amp;X)-Immediate (and it ignores the carry!) For this reason I&apos;ve found it useful to save a byte here and there.</p>
</div><div class="mdl-card--border"></div>