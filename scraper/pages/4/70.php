<div class="mdl-card__title"><strong>lazerbeat</strong> posted on 
		
			
				
				Aug 13, 2014 at 9:29:01 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<br>
	<div>
		&#xA0;</div>
	<div>
		Sprite DMA<br>
		<br>
		<span "font-size: 12px;">&#xA0; LDA #$00</span><br>
		<span "font-size: 12px;">&#xA0; STA $2003 ; set the low byte (00) of the RAM address</span><br>
		<span "font-size: 12px;">&#xA0; LDA #$02</span><br>
		<span "font-size: 12px;">&#xA0; STA $4014 ; set the high byte (02) of the RAM address, start the transfer</span></div>
</div>
I have a question about this bit of the code. Sorry if I am being really really silly here, but I don&apos;t understand why we are writing $02 to $4014, I thought the PPU was $2000 - $2007 and $4000 - $4017 were audio and controller ports? What am I missing here?
				</div><div class="mdl-card--border"></div>