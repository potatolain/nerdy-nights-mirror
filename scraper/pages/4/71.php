<div class="mdl-card__title"><strong>NESHomebrew</strong> posted on 
		
			
				
				Aug 14, 2014 at 1:11:27 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>lazerbeat</b></i><br>
	<br>
	<div class="FTQUOTE">
		<br>
		<div>
			&#xA0;</div>
		<div>
			Sprite DMA<br>
			<br>
			<span font-size:>&#xA0; LDA #$00</span><br>
			<span font-size:>&#xA0; STA $2003 ; set the low byte (00) of the RAM address</span><br>
			<span font-size:>&#xA0; LDA #$02</span><br>
			<span font-size:>&#xA0; STA $4014 ; set the high byte (02) of the RAM address, start the transfer</span></div>
	</div>
	I have a question about this bit of the code. Sorry if I am being really really silly here, but I don&apos;t understand why we are writing $02 to $4014, I thought the PPU was $2000 - $2007 and $4000 - $4017 were audio and controller ports? What am I missing here?</div>
<br>
$4014 is the OAM DMA register. &#xA0;<a href="http://wiki.nesdev.com/w/index.php/PPU_OAM" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/PPU_OAM">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
				</div><div class="mdl-card--border"></div>