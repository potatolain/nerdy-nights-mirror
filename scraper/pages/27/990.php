<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Dec 12, 2017 at 10:46:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Just as a quick tip/alternative, if you want 256 addresses store two tables, one for the lo byte of each address, and one for the hi byte of each address. Then you don&apos;t need to asl, just ldx the index of the address (or other 16 bit value) that you want.<br>
<br>
address1:<br>
;whatever data you need<br>
address2:<br>
;whatever data you need<br>
address3:<br>
;whatever data you need<br>
<br>
;Apologies if I got the nesasm syntax wrong. its either LO and HI or LOW and HIGH, I forget which<br>
addresses_lo:<br>
.db LOW(address1), LOW(address2), LOW(address3)<br>
<br>
addresses_hi:<br>
.db HIGH(address1), HIGH(address2), HIGH(address3)<br>
<br>
;Variable is a 16 bit value in zp or ram<br>
ldx #the_address_number_you_want<br>
lda addresses_lo,x<br>
sta variable<br>
lda addresses_hi,x<br>
sta variable+1<br>
<br>
ldy #whatever_offset_you_need_From_that_address<br>
lda [variable],y&#xA0;&#xA0; ;I seem to recall nesasm using []
				</div><div class="mdl-card--border"></div>