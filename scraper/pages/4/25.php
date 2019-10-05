<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Feb 25, 2011 at 7:24:43 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You need to point the PPU to the sprite RAM. Without looking I want to say:
<br>
<br>LDA $2002
<br>LDA #$3F<br>STA $2003
<br>LDA #$00&#xA0;<br>STA $2003
<br>
<br>That will point it to the PPU&apos;s pallet ram. Then you upload a new pallet, or you can do something like storing $3F10 and then only change the pallets you need. Go to $3020 to upload both palettes at the same time.<br>
				</div><div class="mdl-card--border"></div>