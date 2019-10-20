<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Jan 22, 2014 at 2:54:11 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks Kevin. I thought about it a bit, and since the player will be able to enter from any border point I came up with the following based on your logic (I think anyways). After declaring a HeroPosition variable, and reserving enough space (16), I added the following routines:<br>
<br>
StoreHeroLocation:<br>
&#xA0; LDA SPRITE_BANK<br>
&#xA0; STA HeroPosition<br>
&#xA0; LDA SPRITE_BANK+1<br>
&#xA0; STA HeroPosition+1<br>
&#xA0; LDA SPRITE_BANK+2<br>
&#xA0; STA HeroPosition+2<br>
&#xA0; LDA SPRITE_BANK+3<br>
&#xA0; STA HeroPosition+3<br>
.Done<br>
&#xA0; RTS<br>
<br>
<br>
<br>
RetrieveHeroLocation:<br>
&#xA0; LDA HeroPosition<br>
&#xA0; STA SPRITE_BANK<br>
&#xA0; LDA HeroPosition+1<br>
&#xA0; STA SPRITE_BANK+1<br>
&#xA0; LDA HeroPosition+2<br>
&#xA0; STA SPRITE_BANK+2<br>
&#xA0; LDA HeroPosition+3<br>
&#xA0; STA SPRITE_BANK+3<br>
.Done<br>
&#xA0; RTS<br>
<br>
Hopefully that is transcribed correctly, I am away from my other computer at the moment. Calling the store routine at the beginning of a room loading routine and again at the end seems to accomplish what I was after. Hopefully this help anyone else who has a similar problem, and if there are problems with what I have, please point them out sooner than later <span class="sprites_emoticons absmiddle" id="emo_smile"></span> Thanks too MRN, just saw your post. I have a feeling that that will be my next issue (and may be related to the question below).<br>
<br>
<br>
<br>
On another note, how does one get rid of sprites that loaded in a different state? I ran into this with Pong too, once the game finished and the background changed to the Game Over background, the sprites were still visible, though inactive. In my current situation the sprites all load fine in the rooms, but once the player moves from a room with three sprites to two, for example, the third sprite still appears in its old location. Any thoughts?
				</div><div class="mdl-card--border"></div>