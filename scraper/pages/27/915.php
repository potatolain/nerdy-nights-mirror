<div class="mdl-card__title"><strong>S. P. Sour</strong> posted on 
		
			
				
				Aug 13, 2017 at 6:02:35 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I hope this is the right thread for this but if not please correct me.<br>
<br>
I have been getting started with NES homebrew recently (and with what else but Nerdy Nights) so that I could make a game for my friend&apos;s birthday. The tutorials there were pretty helpful for getting things started, and I have tried to learn 6502 ASM before so the actual commands made enough sense. I had a lot of trouble with backgrounds though, the PPU (or whatever) was acting really strange with the data I was giving it. I initially fixed it and figured it wouldn&apos;t be a problem.<br>
<br>
Unfortunately, I later realized I wanted dialogue boxes in the game, and there does not seem to be a tutorial for that. I figured it&apos;s just uncommon; the closest thing in a NES game I can remember would be in Zelda II where you can talk to the village people and a little box comes up with &quot;I AM ERROR&quot; or whatever rubbish the NPC has to say. Anyways, I figured I would have a go at figuring it out myself, and this is where this ramble becomes relevant to this topic.<br>
I figured the most logical thing to do would be to design the dialogue box(es) and have the program render it as a section of background in the middle of the screen. (And if I added enough dialogue, I could have a subroutine that draws the same box every time so you can just specify the text or whatever.) I knew that you could draw background starting at a certain point - I used that to draw the lower 3 rows of tiles in the game, as beyond the floor and some text I didn&apos;t bother with a full background.<br>
I tried this and ran into a problem, the same one I&apos;d faced before.<br>
<strong>The problem:</strong> What happens is, the game loads a certain number of tiles (in this case I think it&apos;s $57 or DEC-87), and then loads all the rest of the tiles into the latter 4 spaces of the first 5 or so, constantly overwriting that 4-tile space when it reaches the last spot. This is confusing the heck out of me, and worst of all, no one seems to have run into this problem before. (If they have, then I just used the wrong keywords in Google <span class="sprites_emoticons absmiddle" id="emo_tongue">&#xA0;</span>) Here&apos;s a link to a screenshot of the error in action: <a href="http://imgur.com/3zACpFm" target="_blank">http://imgur.com/3zACpFm...</a> (The &quot; TH! &quot; space is usually something random, but I changed the number of tiles the procedure loads so that you can clearly see that it&apos;s continuing from the same set of text\tiles to load.)<br>
<br>
<strong>If additional info helps:</strong><br>
-It appears the same way in the nametable, so the problem is clearly (to me anyways) in how the PPU is assigning each new tile to the VRAM or whatever it is.<br>
-All game logic is currently inside the NMI loop, as there isn&apos;t really a whole lot going on in the game.<br>
-I use the given method of loading from $2002, putting the address into $2006, and then feeding everything into $2007.<br>
-I have a separate procedure where the game does a similar loop, but just constantly STA&apos;ing 0 into the slot, to &apos;erase&apos; the dialogue box. This works perfectly, or at least, much more successfully.<br>
--Whenever the above &apos;erase&apos; procedure is performed, the floor+floortext (the only piece of background other than the dialogue) temporarily jumps up to the space where dialogue is intended to be drawn. This happens in like a split-second, although it&apos;s still noticeable. The nametable does not change, despite the obvious visual hiccup.<br>
<br>
<strong>TL;DR:</strong> <strong>Trying to make a game for my friend. Tried to render dialogue boxes as a mid-screen section of background and the PPU had a hissy fit.</strong><br>
<br>
If needed, I wouldn&apos;t mind providing snippets of code from what I have.<br>
<br>
Thanks, please help if you can!
				</div><div class="mdl-card--border"></div>