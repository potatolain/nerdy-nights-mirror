<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Sep 27, 2016 at 9:38:56 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
<img src="scraper/images/cpumemmap.png" original-src="http://www.nesmuseum.com/images/cpumemmap.png"><br>
If you are in a pinch and your game doesn&apos;t use saves, it is my understanding you can borrow the WRAM area as well, $6000.<br>
&#xA0;</div>
<br>
I take advantage of this to ask a question.<br>
<br>
NROM is (up to) 32kB of PRG ROM ($8000-$FFFF), plus 8kB of CHR ROM (stored on another chip). Correct?<br>
Now, addresses in range $6000 to $7FFF are WRAM, unused. What if you wish to use them?<br>
<br>
I explain my doubts:<br>
<br>
1. when you put the game on cart, if a NROM game uses WRAM, there is need for a further chip?<br>
<br>
2. WRAM space must forcefully be battery backed up? Cannot be flash memory?<br>
<br>
3. Let&apos;s say I start the game, and save data in WRAM space (a saving feature); how can the machine tell next time that such data was saved?<br>
Sure, I can make a code string, like #$AA #$BB #$CC, to be stored at addresses $6000 $6001 $6002 telling the machine: there is stored data in the WRAM.<br>
So, if that string AABBCC is there it means there is data; if it is not there, it means that there is not data (i.e. there is not a saved game in WRAM). But how can I be sure, that the ABSOLUTE first time running the game, that string isn&apos;t there at addressees $6000/1/2 by case? It is there a way, in manufacturing process, to reset up the WRAM to all #$00 or all #$FF?<br>
<br>
4. How do you write/read to/from WRAM? Same as from RAM?<br>
<br>
5. Costs? Availability? I mean, make a NROM game on cart is (relatively to other mappers) cheaper, so would the use of WRAM deny such economical advantage?<br>
I have no idea what kind of chip is needed, and if battery is required what are the costs.<br>
<br>
Any other info or comment related to WRAM use is of course welcome.<br>
<br>
Thank you all! <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
<br>
<strong>Edit</strong>: 6. is it there anything that changes, in the .NES file header, between a NROM that does not use WRAM, and a NROM that does use WRAM?<br>
&#xA0;
				</div><div class="mdl-card--border"></div>