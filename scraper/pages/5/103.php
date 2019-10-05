<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Oct 17, 2012 at 10:07:21 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Nope. The data goes in to the ROM how you set it up. Imagine this as assembly:
<br>
<br>Code:
<br>  LDA #$Whatever
<br>  JMP .NextCode
<br>CodeData: .db $00,$00
<br>.NextCode
<br>  STA Wherever
<br>  RTS
<br>
<br>That would be compiled in the order it is put in. First two commands, then come data, then two more commands. It does not optimize anything for you, you have to do that by managing the data and program yourself.
<br>
<br>And the speed for all the instructions can be found online. Minimum is two, maximum is 7 CPU clocks. LDA #$00 is 2 clocks for example, while a more complex instruction like LDA [$20],Y would take 5 (or 6 if a page is crossed).
				</div><div class="mdl-card--border"></div>