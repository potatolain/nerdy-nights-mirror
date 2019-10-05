<div class="mdl-card__title"><strong>thebmxeur</strong> posted on 
		
			
				
				Jan 4, 2011 at 2:44:44 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi, I&apos;m new to NES programming and this tutorial really helps a lot.<br><br>But I&apos;ve got a few question : when I set a color in the first byte of the sprites palette, the fist bytes of each &quot;group&quot; of background palette changes. I tried with both the file I was working on and the file provided and it does the same. I&apos;m missing something ?<br><br>Also can someone explain a little the DMA part when loading sprites ? I&apos;m not sure why we don&apos;t use 2 STA $2003 (one with #$00 and one with #$02) and then &quot;call&quot; STA $4014. And is it ok to have that part (the DMA transfer) before checking the controllers states and moving the sprites (will the sprites move during the current or the next frame ?) ?<br><br>A last question : in the first part of the tutorial (making a bluish background), during the clrmen: part you put #$FE at $0300 ($03xx). Why ?<br><br>I hope I didn&apos;t ask too much question ^^<br>Thanks in advance<br>Bye<br><br><br>
				</div><div class="mdl-card--border"></div>