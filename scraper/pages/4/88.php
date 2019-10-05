<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Feb 25, 2015 at 6:01:35 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Farid</b></i><br>
	<br>
	Writing #$00 to $2003 sets the OAM address (from $00 to $FF)<br>
	Writing #$02 to $2014 sets the CPU RAM address (from $XX00 to $XXFF) and then begins the transfer from CPU RAM to OAM automatically<br>
	00 and 02 are not High/low bytes of a single address, they are referring to different addresses</div>
This should say $4014 instead of $2014, and the DMA source address doesn&apos;t have to be RAM; it can be any address in the memory space (you can do OAM transfers from ROM if you want). Other than that it&apos;s correct.<br>
				</div><div class="mdl-card--border"></div>