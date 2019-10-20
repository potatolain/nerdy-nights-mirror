<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Feb 2, 2017 at 7:59:22 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I would have guessed A, but that&apos;s tough to prove knowing that I already read the answer before posting. <span class="sprites_emoticons absmiddle" id="emo_tongue">&#xA0;</span>
<br>
<br>Logically it makes sense. Take the background completely out of the question, what happens? Sprite $0200 with attr $20 will cover sprite $0205 with attr $00 with a transparent background. Populating the the background with non-transparent tiles after the fact doesn&apos;t change the sprite priority. 2 completely different routines.
<br>
<br>1 potential place to check this is in Mario 3 where Mario can go behind the background but the enemies stay in the foreground assuming Mario is the Higher priority (world 1-3 i think has the best chance of this). However, the programmers may have taken this into account and mitigated the issue before hand.
				</div><div class="mdl-card--border"></div>