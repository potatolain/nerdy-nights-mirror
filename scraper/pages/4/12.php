<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Feb 12, 2010 at 5:57:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>rizz</b></i><br><br>Ah, so the 8 sprites per scanline even counts sprites that are turned off.
<br>
<br>So, is it necessary to read $2002 as a precaution every time you are writing addresses to the PPU registers?  Or are there only specific times?
<br>
<br>Is it best (or is it necessary) to turn off sprites &amp; background (using $2001) during all palette, sprite, and background updates?
<br>
<br>Thanks!</div><br><br>You don&apos;t have to read $2002 if you know for a fact that $2006 is already expecting a high byte.&#xA0; If you don&apos;t know, or are unsure, it&apos;s best to read it as a precaution.&#xA0; An example of when you would know might be a case like this:<br><br>lda $2002 ;reset hi/lo latch<br>lda #$20<br>sta $2006<br>lda #$00 <br>sta $2006<br>sta $2007<br><br>lda #$23&#xA0;&#xA0; ;look, we didn&apos;t need to read $2002 here<br>sta $2006<br>lda #$C0<br>sta $2006<br>lda #$00<br>sta $2007<br><br>We don&apos;t need to read $2002 here because we know $2006 is expecting a high byte since we wrote to $2006 exactly two times since we read $2002.<br><br>As for turning off sprites/bg, you definitely <span style="font-weight: bold;">don&apos;t</span> want to do it everytime you update something or your screen will black out every update (turning off BG blacks out the screen).<br><br>You <span style="font-weight: bold;">do</span> want to make sure all your graphics updates are done during vblank (in your NMI routine) though.&#xA0; This includes writing palettes, updating nametables and performing sprite DMA.<br><br>The only time you&apos;d need to turn sprites/bg off would be if you need to draw an entire screen all in one go, like redrawing the title screen after the game is over, or drawing the first screen at the beginning of a new level or something like that.&#xA0; In these cases you need more drawing time than vblank allows, and a black transition screen is usually desirable.<br>
				</div><div class="mdl-card--border"></div>