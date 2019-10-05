<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				May 8, 2010 at 9:31:23 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>DoctorMikeReddy</b></i><br><br>I realise that this is an old (if bloody excellent) tutorial, but I wondered what (if any) significance the other 7 bits have, in reading from $4016 each time? Are they just random noise? Seems strange to transmit only one bit of data each time, when the whole controller could be mapped to one byte. Also, if I had a button pressed and let go before that button state was passed to the processor, would there be some lag in value?</div><br>It&apos;s good practice to also check the 2nd bit (D1) because Famicom external controllers use it. The other bits are not really very useful for normal stuff (they go to the expansion port however). Bits D8-D5 are not connected at all and will return whatever value was previously on the data line (unless the cart has resistors on the data lines like the PowerPak).<br>
<div><br></div><div>The reason it transmits the data serially is so that they can get away with less wires. There&apos;s basically an 8 bit shift register (think of it as a variable) in the controller. When the controller is latched by writing to $4016 all the button states are copied to the shift register. Then when $4016 or $4017 is read the shift register will place the bits on the D0 data line one by one.</div>
				</div><div class="mdl-card--border"></div>