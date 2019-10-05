<div class="mdl-card__title"><strong>bunnyboy</strong> posted on 
		
			
				
				May 7, 2009 at 4:18:40 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Cthulhu32</b></i><br><br>Ahh okay, so when you LDA #$03 you&apos;re putting 3 into the A register (CPU), and then storing it into the BankValue (ROM) which signals the bank switch? <span class="Apple-style-span" style="font-weight: bold; ">This way the CPU &amp; ROM match?</span></div><br><br>That&apos;s the key, the values have to match or you will get the wrong result in the bankswitch. &#xA0;ROM is read only so you can&apos;t change the data there.
				</div><div class="mdl-card--border"></div>