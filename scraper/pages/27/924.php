<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Aug 26, 2017 at 11:30:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					not exactly. Pointer would be declared as
<br>
<br>Pointer .rs 2
<br>
<br>Then you would load an address into it like
<br>
<br>LDA #$00         ;low byte of address
<br>STA Pointer     ;into low byte of pointer
<br>LDA #$20         ;high byte of address
<br>STA Pointer+1 ;into high byte of pointer
<br>
<br>
<br>Where Pointer had both the high byte /and/ the low byte. 
<br>Then you can use y to index into the address. So then with your example
<br>
<br>
<br>LDA #$0F
<br>STA $2000
<br>LDY #$00
<br>
<br>LDA [Pointer], y
<br>
<br>Would load 0F into A, as putting Pointer in brackets indicates indirect indexing with a pointer. Notice here, we have to use y to do this.
<br>
<br>You can also replace that direct store to $2000 by doing the same thing 
<br>
<br>LDA #$0F
<br>LDY #$00
<br>STA [Pointer], y ; same as STA $2000
				</div><div class="mdl-card--border"></div>