<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jul 6, 2012 at 11:00:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The sprite palette 0 color isn&apos;t used ever, and you assgning it is screwing with your program because the PPU doesn&apos;t write to $3F10, it writes over $3F00. It has to match the background color as the sprite transparent color writes miror down to the 3F00-3F0F range.<br>
<br>
<div>
	palette:</div>
<div>
	&#xA0; .db $33,$34,$35,$0F, &#xA0;$33,$34,$35,$0F, &#xA0;$33,$34,$35,$0F, &#xA0;$33,$34,$35,$0F &#xA0; ;;background palette</div>
<div>
	&#xA0; .db $1A,$02,$21,$0F, &#xA0;$22,$02,$38,$3C, &#xA0;$22,$1C,$15,$14, &#xA0;$22,$02,$38,$3C &#xA0; ;;sprite palette<br>
	<br>
	Which is 1A and then when you look at a palette cheat sheet, is the color green you&apos;re describing.</div>
<br>
This shold work. Rename the file when including it too, the names not right. I didn&apos;t compile it but I&apos;m fairly confident that this will get the results your after.<br>
<br>
<a href="http://wiki.nesdev.com/w/index.php/Palette" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/Palette">http://wiki.nesdev.com/w/index.php/Palette</a>
				</div><div class="mdl-card--border"></div>