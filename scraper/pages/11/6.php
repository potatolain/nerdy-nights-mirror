<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jul 2, 2014 at 8:59:56 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Vectrex280996</b></i><br>
	<br>
	What I understand about the shift register use is that only the first bit is used (Kind of like the controller). You have to do an LSR to get the previous bits to this particular bit<br>
	(Ex: 0001001[1] C0 - Only the byte in the brackets is read, then as you LSR, the bytes you wanna read go to the right, like this - 0000100[1] C1)<br>
	Also, if I wrote this to the config at $8000, it should be 1 - two 4KB CHR banks, 0 - 32 KB PRG switch at once, 0-Not used due to 32KB swap, 11-Horizontal Mirroring<br>
	Is that how it works?</div>
That&apos;s correct.<br>
<br>
<div class="FTQUOTE" "width: 794.390625px;">
	<i>Originally posted by:&#xA0;<b>Vectrex280996</b></i><br>
	<br>
	However, I don&apos;t really understand why you have to write to the registers in $XXXX-$YYYY ranges... Aren&apos;t those ranges used for the PRG? Thanks for enlightening me on that</div>
The $8000-FFFF range is used for PRG yeah, but since it&apos;s ROM the writes to the same area can be reused by mappers for their own purposes. So &quot;why&quot; is not really the right question to ask here, it just is the way it is.
				</div><div class="mdl-card--border"></div>