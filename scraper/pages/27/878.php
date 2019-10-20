<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Jan 13, 2017 at 2:59:33 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Text boxes are one of my favorite things <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>.<br>
<br>
For single screen games I just have it reload what needs to be on the screen from ROM, more or less the same way that I would load a room to begin with. I just limit it to what needs to be rewritten. The data is still the same, unless it has been updated in some way (treasure chest is opened instead of closed, etc.). Scrolling presents other issues, but the biggest is aligning the box with the attributes and storing/reloading things correctly. In this scheme nothing is &quot;stored&quot; since nothing is changed. *Writes have to get buffered, though, so that is what you might be seeing in the hex editor. Just a guess.<br>
<br>
I have done it the other way, where the metatile data gets stored to RAM, but I think that the above way is what I was using last. Work on Spookotron halted my other projects... for now!<br>
<br>
Kevin has another way of doing text boxes, swapping between nametables and such, but that is black magic to me.<br>
<br>
The demo version of lizard has a pretty neat way of doing them too, but it was abandoned once scrolling was implemented. It uses sprite zero hits to scroll up or down the bottom portion of the screen.<br>
<br>
So many cool ways to do them, and even more poorly implemented examples from licensed games. When you slow a lot of them down in an emulator you&apos;ll find that they did not update the order of things correctly, or make small refinements that would have resulted in some great text boxes. Check out Uforia for instance; the ordering is terrible.
				</div><div class="mdl-card--border"></div>