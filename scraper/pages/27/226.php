<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Apr 22, 2014 at 5:02:53 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>KHAN Games</b></i><br>
		<br>
		<div class="FTQUOTE">
			<i>Originally posted by: <b>Roth</b></i><br>
			<br>
			A pointer is going to be a 16-bit number. So where you have.... lda texts, x &#xA0;sta Text_Pointer... you are loading an 8-bit value. To be super generic about it, you could just do:<br>
			<br>
			lda &lt;#PauseText<br>
			sta Text_Pointer+0<br>
			lda &gt;#PauseText<br>
			sta Text_Pointer+1<br>
			<br>
			Then you would have to use the Y register and not the X. Since the address is in zero page, using (), y will get you want you want:<br>
			<br>
			lda (Text_Pointer), y<br>
			sta $2007<br>
			iny<br>
			;etc etc<br>
			<br>
			Be sure to change Text_Pointer to .res 2, because you want to reserve 2 bytes for it since it is going to be used as a 16-bit address.<br>
			<br>
			Dunno if there&apos;s errors in what I said, but that&apos;s what it looks like needs to be done to me. Hope it helps! Oh, and the syntax I use is for ca65, you may need to adjust for whatever assembler you use.</div>
		<br>
		Only difference for the NESASM compiler is he&apos;ll have to use [] instead of ().&#xA0; (Assuming he keeps the beginning of his old routine the same.)<br>
		&#xA0;</div>
	Sorry, using NESASM.<br>
	<br>
	It dislikes &lt; and &gt;. I&apos;m messing with the code trying different things.<br>
	<br>
	&#xA0;</div>
<br>
&#xA0; LDA #low(PauseText)<br>
&#xA0; STA TextPointer<br>
&#xA0; LDA #high(PauseText)<br>
&#xA0; STA TextPointer+1<br>
<br>
<div class="FTQUOTE">
	<i>Originally posted by: <b>DoNotWant</b></i><br>
	<br>
	Sorry to be a picky little dweeb here, but NESASM is an assembler. Compilers are usually a lot more complex than assemblers.</div>
<br>
Terminology has never been my strong suit .<span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>