<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Mar 13, 2013 at 11:08:22 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>DamienC666</b></i><br>
	<br>
	Sorry to dig this up, but I had a question about the &quot;clrmem&quot; routine. I got everything to compile and run just fine.<br>
	<br>
	I get why we&apos;re writing $00 to pages 0-7 of memory, but why are we writing $FE to page 3? Specifically, I don&apos;t get:<br>
	<br>
	<div style="margin-left: 40px;">
		clrmem:<br>
		&#xA0; &#xA0; &#xA0;&#xA0; LDA #$00<br>
		&#xA0; &#xA0; &#xA0;&#xA0; STA $0000, x<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; STA $0100, x<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; STA $0200, x<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; STA $0400, x<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; STA $0500, x<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; STA $0600, x<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; STA $0700, x<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; LDA #$FE&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &lt;------------- These two lines<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; STA $0300, x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &lt;----/<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; INX<br>
		&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; BNE clrmem</div>
	<br>
	Just trying to understand every part of the code before moving on.</div>
The code assumes that $300-$3FF is used for shadow OAM (that is copied to the real OAM later with OAM DMA, PPU register $4014). Initializing OAM to $FE causes all sprite Y positions to be 254, placing the sprites offscreen. Alternatively any other value between 239..255 ($EF..$FF) could be used to the same effect.
				</div><div class="mdl-card--border"></div>