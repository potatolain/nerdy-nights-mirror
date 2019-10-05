<div class="mdl-card__title"><strong>Farid</strong> posted on 
		
			
				
				Feb 25, 2015 at 11:12:42 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>bunnyboy</b></i><br>
	<br>
	<div>
		Sprite DMA</div>
	<div>
		The fastest and easiest way to transfer your sprites to the sprite memory is using DMA (direct memory access). This just means a block of RAM is copied from CPU memory to the PPU sprite memory. The on board RAM space from $0200-02FF is usually used for this purpose. To start the transfer, two bytes need to be written to the PPU ports:
		<pre>  LDA #$00
  STA $2003  ; <span>set the low byte (00) of the RAM address</span>
  LDA #$02
  STA $4014  ; set the high byte (02) of the RAM address, start the transfer
</pre>
	</div>
</div>
<br>
It seems that there is a small mistake on the comments, which confused me at first.<br>
First of all RAM is not a suitble word for&#xA0; $2003, it is Sprite Memory<br>
Then Sprites Memory can address from 00 ~ FF (8bit address range) so it doesn&apos;t have any low / high address bytes<br>
<br>
Thanks for the great tutorial
				</div><div class="mdl-card--border"></div>