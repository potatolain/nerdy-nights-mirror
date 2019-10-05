<div class="mdl-card__title"><strong>jarrodparkes</strong> posted on 
		
			
				
				Oct 16, 2012 at 1:14:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks for the help. I have another question, and maybe this example will help...<br>
<br>
Here is what the documentation (<a href="scraper/files/usage.txt" target="_blank">http://www.nespowerpak.com/nesasm...</a>) says about BANK:<br>
BANK - Select a 8KB ROM bank (0-127) and reset the location counter to the latest known position in this bank.<br>
<br>
EXAMPLE ASM FILE:<br>
<br>
; some header info...<br>
<br>
.bank 0<br>
.org $8000<br>
SEI ; <strong>will each command after the .bank and .org be offset from memory location $8000 ?</strong><br>
{ ... } ; more opcodes<br>
<br>
.bank 1<br>
.org $FFFA<br>
{ ... } ; commands to set NMI, IRQ, and RESET vectors...<br>
<br>
.bank 0 ; <strong>does re-using this directive now set the location counter to where we left off in bank 0 ?</strong><br>
<br>
				</div><div class="mdl-card--border"></div>