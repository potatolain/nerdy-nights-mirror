<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				Feb 11, 2010 at 9:20:55 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					$2006 is a 16 bit address.  You write to it twice, once for the high byte of the address and once for the low byte.  But at reset or when your code is running you may not know if the PPU is expecting the high or the low byte.  If you write low but the PPU is expecting high then the address will be wrong.  So reading $2002 resets the PPU to expect the high byte first.
<div><br></div><div>After the initial setup you will almost entirely ignore the vblank flag. &#xA0;Instead you will use NMI.</div><div><br></div><div>Sprites go outside the visible area to cure some of confusion. &#xA0;If they are left at 0 all 64 sprites will be in the upper left corner. &#xA0;Because of the 8 sprites per scanline limit anything else you put on that top row will be invisible, possibly causing you to spend hours debugging for nothing &#xA0;<img src="i/expressions/face-icon-small-smile.gif" border="0" style="display: none;"></div>
				</div><div class="mdl-card--border"></div>