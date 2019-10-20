<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Jun 3, 2014 at 4:35:28 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Cycle them.  The sprites closer in memory to $0300 (or whatever $0X00 you&apos;re using) get drawn first.  So, you flip-flop the order in which they are drawn every frame.  That means you have to store them in memory in a different page and copy them to your DMA page each frame in your flip-flop order.
				</div><div class="mdl-card--border"></div>