<div class="mdl-card__title"><strong>Memblers</strong> posted on 
		
			
				
				Nov 28, 2009 at 1:14:52 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br><br>-You can only have even numbers of PRG banks.&#xA0; NESASM uses 8kb &quot;banks&quot;, I&apos;m talking about 16kb banks.&#xA0; <br><p>i.e. 02 (32kb),04 (64kb),06 (96kb),08 (128kb),0A (160kb),0C (192kb),0E (224kb),10 (256kb)<br></p><br></div><br>While technically you can make your PRG in all those sizes, there&apos;s no guarantee that all emulators will load sizes other than 32kB, 64kB, 128kB, 256kB, 512kB, etc.&#xA0; Some emus will want to start in the highest numbered bank, which is problematic if the ROM is abnormally sized.<br><br>Though in my experience with an MMC1A, it started in a random 32kB bank.&#xA0; So you may need a copy of the vectors and some startup code in every 32kB bank, that&apos;s easy enough.<br>
				</div><div class="mdl-card--border"></div>