<div class="mdl-card__title"><strong>Cthulhu32</strong> posted on 
		
			
				
				May 7, 2009 at 12:05:26 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>frantik</b></i><br><br>.db causes the bytes to be written at that point in the code. data doesn&apos;t automatically start at $8000 or anything.. even your program code won&apos;t start at $8000 unless you tell the assembler to do so with an org command.  (well the pointers won&apos;t start at $8000)
<br>
<br>you could do something like 
<br>
<br>LDA #$03
<br>STA Bankvalue + #$03
<br>
<br>if you knew you wanted to switch to bank 3.. but it&apos;s better to reuse the general bank switching function.. that way if you end up switching mappers you only ahve to change one area of code</div><br>Ahh okay, so when you LDA #$03 you&apos;re putting 3 into the A register (CPU), and then storing it into the BankValue (ROM) which signals the bank switch? This way the CPU &amp; ROM match?
<div><br></div><div>I think I understand Bunnyboy&apos;s code now as well, the reason why he has bankvalues laid out as .db $00,$01,$02,$03 is because you&apos;re literally writing the same value on top of a ROM (which just triggers a bank switch)</div><div><br></div><div>So LDA #$01 sets the accumulator (CPU), TAX; STA Bankvalues, X; overwrites Bankvalues without modifying A, and because X = A, X is identical to the values inside of Bankvalues, you&apos;re not changing any data, you&apos;re just triggering a bankswitch.</div><div><br></div><div>Thanks for the clarification!</div>
				</div><div class="mdl-card--border"></div>