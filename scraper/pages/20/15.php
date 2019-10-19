<div class="mdl-card__title"><strong>ddribin</strong> posted on 
		
			
				
				Dec 13, 2009 at 6:41:34 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div>Hey MetalSlime,</div><div><br></div><div>Thanks a <i>bunch</i>&#xA0;for these tutorials. &#xA0;They&apos;ve been very interesting, and I&apos;ve been having fun with the sound engine. However, I think I found a bug in sound_load in regards to stream_ticker_total. &#xA0;In this article, you mention:</div><div><br></div><hr><div class="FTQUOTE"><i>Originally posted by: <b>MetalSlime</b></i><br>Then
we will need to edit sound_load to read this new byte for each stream
and store it in RAM.&#xA0; We&apos;ll also want to initialize stream_ticker_total
to some fixed starting value, preferably a high one so that the first
tick will happen without a delay.&#xA0; Finally, we will have to update all
of our songs to include tempos in their headers.<br></div><hr>Then, in the code, it gets initialized to $A0:<div><br></div><div><div>&#xA0;&#xA0; &#xA0;lda #$A0</div><div>&#xA0;&#xA0; &#xA0;sta stream_ticker_total, x</div><div><br></div><div>The problem is if a song has a tempo of less than $60, then the ticker won&apos;t roll over on the first frame. To hear this, change the tempo of song 2 to $10 and then play it twice in a row. The second time it gets played, the last note is briefly played again.</div><div><br></div><div>If I initialize stream_ticker_total to $FF in sound_load, then it seems to fix it. Is this the best fix? What was the reasoning behind using $A0?</div><div><br></div><div>Thanks,</div><div><br></div><div>-Dave</div><div><br></div><br>
</div>
				</div><div class="mdl-card--border"></div>