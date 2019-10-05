<div class="mdl-card__title"><strong>ddribin</strong> posted on 
		
			
				
				Oct 25, 2009 at 12:18:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;ve verified that the initial palette on Nestopia is not all zeros. &#xA0;Take a look at the Nestopia source code in NstPpu.cpp:<div><br></div><div><div>static const byte powerUpPalette[] =</div><div>{</div><div>&#xA0;&#xA0; &#xA0;0x3F,0x01,0x00,0x01,0x00,0x02,0x02,0x0D,</div><div>&#xA0;&#xA0; &#xA0;0x08,0x10,0x08,0x24,0x00,0x00,0x04,0x2C,</div><div>&#xA0;&#xA0; &#xA0;0x09,0x01,0x34,0x03,0x00,0x04,0x00,0x14,</div><div>&#xA0;&#xA0; &#xA0;0x08,0x3A,0x00,0x02,0x00,0x20,0x2C,0x08</div><div>};</div><div><br></div><div>So to make this example work properly, the palettes should be cleared to zero first.</div><div><br></div><div>-Dave</div><div><br></div></div>
				</div><div class="mdl-card--border"></div>