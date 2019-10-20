<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				May 20, 2017 at 11:06:43 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					OOOOOOO okay<br>
<br>
I figured it out<br>
<br>
the value in 4013 does not mean the literal byte size. it refers to how many ROWS of 16 bytes. I didn&apos;t read the NES dev page too well I guess, cause it&apos;s right here:<br>
<br>
Sample length = %LLLL.LLLL0001 = (L * 16) + 1<br>
<br>
whoops. looks much more like a real sound wave now that I see it in famitracker, though<br>
<br>
EDIT: like bunny boy just said. Thank you!
				</div><div class="mdl-card--border"></div>