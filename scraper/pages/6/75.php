<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Feb 19, 2012 at 3:56:53 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Are you saying that changing any of your attributes to any non-zero values are causing problems?  I changed the title attribute to:
<br>
<br>    titleattr:
<br>  .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000
<br>  .db %00000000, %01010101, %01010101, %01010101, %01010101, %01010101, %01010101, %00000000
<br>  .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000
<br>  .db %00000000, %10101010, %10101010, %10101010, %10101010, %10101010, %10101010, %00000000
<br>  .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000
<br>  .db %00000000, %11111111, %11111111, %11111111, %11111111, %11111111, %11111111, %00000000
<br>  .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000
<br>  .db %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000, %00000000
<br>
<br>And I didn&apos;t seem to get any errors.  What is your problem, exactly?
				</div><div class="mdl-card--border"></div>