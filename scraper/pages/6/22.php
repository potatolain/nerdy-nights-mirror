<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Oct 27, 2009 at 7:49:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You have to incriment AddrHigh cause:
<br>$2000 + $00 = $2100
<br>So on the second outer loop you want to start writing from $2100 not $2000.  If you didn&apos;t do this, you would just overwrite the top 1/4 of the screen 4 times.
				</div><div class="mdl-card--border"></div>