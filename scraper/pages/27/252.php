<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				May 4, 2014 at 10:32:58 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Well, this seems to be more of a hacking question. I&apos;m not sure what game you are hacking, but if you know what is happening in the PPU at the time, have you tried putting a conditional in the debugger that matches where you want it to change? For instance if it is address $23c9 that you want to change, and you know what it is already, put the conditional of $23c9 == #170. The 170 would be whatever you know it is at this point. It&apos;ll probably snap somewhere in NMI if it is loading on the fly, and that will show you where it is loading from, which will probably be somewhere in RAM. After you find out where it is loading from, then you can change the conditional to match the address in RAM, which will probably allow you to find where it is loading from.
				</div><div class="mdl-card--border"></div>