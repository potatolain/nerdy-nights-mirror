<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Nov 17, 2014 at 1:18:38 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					And now I have another question regarding the MMC1. When I bankswitch the CHR background like this<br>
<br>
LDA #%00000010 ;Swap background<br>
JSR Background_Select ;Go to $C000 bankswitching subroutine<br>
<br>
;Rest of code here<br>
<br>
<div>
	Background_Select:</div>
<div>
	&#xA0; STA $C000</div>
<div>
	&#xA0; LSR A</div>
<div>
	&#xA0; STA $C000</div>
<div>
	&#xA0; LSR A</div>
<div>
	&#xA0; STA $C000</div>
<div>
	&#xA0; LSR A</div>
<div>
	&#xA0; STA $C000</div>
<div>
	&#xA0; LSR A</div>
<div>
	&#xA0; STA $C000</div>
<div>
	&#xA0; RTS</div>
<br>
It works fine on an emulator. However, on real hardware, it seems like there is no such thing, the name entry screen of Deal or no Deal keeps the title background CHR bank. What am I doing wrong?<br>
<br>
EDIT: Answered on NESDEV. Gonna keep you informed
				</div><div class="mdl-card--border"></div>