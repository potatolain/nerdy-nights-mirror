<div class="mdl-card__title"><strong>Dimeback</strong> posted on 
		
			
				
				Dec 20, 2013 at 12:30:51 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Dimeback</b></i><br>
		<br>
		I&apos;m a bit new to NES programming, so after doing some research when some programming veteran brought up the term &quot;hardcoded OAM&quot;, I discovered my sprite data was hardcoded (my sprite is 16x16 pixels). I was wondering how I could make it non-hardcoded (hopefully this all makes sense to you). I was told to draw all the other sprites around the main sprite I use for movement, collisions, updates, etc. but I am not sure how todo that. Here is my sprite drawing routine:<br>
		<br>
		PlayingSP: ; These are the sprites during the game<br>
		;vert tile attr horiz<br>
		.db $B0, $00, $00, $20<br>
		.db $B0, $01, $00, $28<br>
		.db $B8, $02, $00, $20<br>
		.db $B8, $03, $00, $28<br>
		.db $37, $37, $37, $37 ;end &#xA0; &#xA0;&lt;- Ignore this.</div>
	<br>
	<a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=33378" target="_blank" original-href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=33378">http://nintendoage.com/forum/messageview.cfm?catid=22&amp;th...</a> <br>
	&#xA0;</div>
Okay, I think I have incorporated everything within the link above. &#xA0;I haven&apos;t run into any problems, so I think I got it working. &#xA0;That brings me to my next question: &#xA0;I&apos;m trying to make my 16x16 sprite flip when I press left (these sprites are oriented to the right). &#xA0;I know how to make the graphics for individual sprites flip, but what I was wondering was how to swap the places of the vertical 8x16 sprites (they appear vertically fragmented) so that it looks like a proper flip.<br>
<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>KHAN Games</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Dimeback</b></i><br>
		<br>
		PlayingSP: ; These are the sprites during the game<br>
		;vert tile attr horiz<br>
		.db $B0, $00, $00, $20<br>
		.db $B0, $01, $00, $28<br>
		.db $B8, $02, $00, $20<br>
		.db $B8, $03, $00, $28<br>
		.db $37, $37, $37, $37 ;end &#xA0; &#xA0;&lt;- Ignore this.</div>
	<br>
	Just to clarify, that isn&apos;t a drawing routine.&#xA0; That&apos;s just the sprite data.&#xA0; The actual drawing routine (since I&apos;m guessing that&apos;s the code from my lessons that you&apos;re using) will be at a subroutine called &quot;LoadSprites&quot;.<br>
	&#xA0;</div>
Oh, thanks for clarifying that. &#xA0;(I&apos;m still trying to wrap my head around how everything in the code works, mostly the stuff I haven&apos;t learnt much about, but it&apos;s gradually becoming clearer to me.)<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>