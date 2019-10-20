<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 20, 2016 at 3:38:41 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>RockyHardwood</b></i><br>
<br>
ahh okay!<br>
<br>
This helped close the gap for sure- so I&apos;d only really use the bank swapping if I Was getting into an egregious amount of information? I see in MRN&apos;s examples he uses NROM with CHR RAM to animate blocks- The reason it confused me mostly was because I was trying to think about how in EB zero, the text boxes pop up but the background never changes- using FCEUXD I saw that it just tends tend to switch out partial data quite a bit!<br>
<br>
Thank you very much for the help!</div>
Duck Tales 2 does this as well. They actually do it in small chunks so they don&apos;t have to turn the screen off.<br>
<br>
Not sure how others do it, but with text boxes, as far as not changing the background, set aside some space in RAM and keep a live copy of the current background. Then pull the data from RAM and write it back to the PPU in small chunks of tiles (1 line at a time).<br>
<br>
&#xA0;</div>
<br>
<br>
When I say RAM, I mean CPU RAM. This is a good way to organize it.<br>
<br>
&#xA0; .rsset $0000<br>
;All zero page variables<br>
<br>
.rsset $0100<br>
;RAM reserved for the stack<br>
<br>
.rsset $0200<br>
;RAM reserved for Character Sprites<br>
<br>
.rsset $0300<br>
;RAM reseved for Music Variables<br>
<br>
.rsset $0400-$07FF<br>
;Available RAM to use to store data that doesn&apos;t need to be in the Zero Page. Good place to store copies of Name Tables and Attribute Tables<br>
<br>
<img src="scraper/images/cpumemmap.png" original-src="http://www.nesmuseum.com/images/cpumemmap.png"><br>
If you are in a pinch and your game doesn&apos;t use saves, it is my understanding you can borrow the WRAM area as well, $6000.<br>
&#xA0;
				</div><div class="mdl-card--border"></div>