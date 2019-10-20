<div class="mdl-card__title"><strong>dangevin</strong> posted on 
		
			
				
				Dec 11, 2007 at 9:30:27 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<a href="http://www.crypticalley.com/files/images/ddr-screenshot.JPG" target="_blank" original-href="http://www.crypticalley.com/files/images/ddr-screenshot.JPG">DDR Screenshot</a>
<br>
<br>Take note of the green/blue arrows, the usable screen space is about 6 arrows including static ones. At 32 pixels you can fit 7 onscreen, the same dimensions as real DDR. I fear 16 pixel arrows might be too small.
<br>
<br>How about getting tricky with alternating sprite displays? Displaying every other tile for the four arrows each refresh. 
<br>
<br><img src="images/missing/ddraa1.gif" original-src="http://img116.imageshack.us/img116/5488/ddraa1.gif">
<br> 
<br>They&apos;ll flicker but it will be uniform and it might produce an interesting effect if they&apos;re put over the background, a transparent effect. How many refreshes does the NES display per second? This (really rough) demo gif looks to be about 6-8fps on my browser. Is there enough time to update all 32 of these tiles plus other sprites during vblank? 
<br>
<br>The other option if this looks like crap is to only draw parts of the arrows. This configuration only has 6 sprites per line and still gives you the visual cue you need.
<br>
<br><img src="images/missing/ddremptyarrowpc7.gif" original-src="http://img444.imageshack.us/img444/7823/ddremptyarrowpc7.gif">
<br>
<br>Although 2player mode is possible with a four-score I don&apos;t think I&apos;ll be programming that into this first foray, I&apos;ve got better ideas for the other half of the screen <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"> And really, thinking of the target market, I think two player capability is superfluous for this release. Who&apos;s going to invite their buddy over for a rousing game of 2-play 8-bit DDR? <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"> They can take turns, damnit! The most likely user is going to just be holding two control pads, sitting on their ass and playing using thumbs-on-d-pads to listen to the tunes <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif">
				</div><div class="mdl-card--border"></div>