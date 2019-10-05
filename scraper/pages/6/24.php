<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Oct 27, 2009 at 8:53:52 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I think I see what you&apos;re saying
<br>AddrHigh and AddrLow are just variables 
<br>
<br>AddrHigh .rs and AddrLow .rs.....They&apos;re not defined anywhere, so they are set to default $00
<br>
<br>I think the magic you&apos;re looking for has to do with the code snippet right before the loop
<br>
<br>  LDA $2002
<br>  LDA #$20
<br>  STA $2006             ; write the high byte of $2000 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $2000 address
<br>
<br>I don&apos;t understand it completely myself, but I&apos;m pretty sure this is setting the the the address for the variables.
<br>
				</div><div class="mdl-card--border"></div>