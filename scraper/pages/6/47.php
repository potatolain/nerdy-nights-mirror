<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Nov 2, 2011 at 12:22:52 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Extending on what Zzap said: If it&apos;s one object like an item in the game that you can pick up, I&apos;d make it sprites. If it&apos;s an object often in the game, I&apos;d recommend making it a background tile. Animate it by taking it off the background is probably the best idea if you have the time to implement it. Super Mario Bros. 3 does this, look at FCEUX&apos;s nametable viewer and jump and hit a coin box and slow it down to see what it does. It&apos;ll remove it from the background and animate it via a sprite, and then put it back when it&apos;s done so that you can have many blocks in a row and still have animation to them when hit.
<div><br></div><div><br></div><div>As for no background, I dunno. A game simply done with all sprites would probably not be very good to look at, even if it played well, and if there&apos;s some decent amount of stuff on the screen, you may have to flicked a decent amount.</div><div><br></div><div>And then the NES usually does 8x8 pixel sprites. You can also do 8x16 sprites, which are actually 2 sprites built into one. You can use both the background graphics and sprite graphics for the whole graphics for the sprites in that mode. The background can only use the background sprites assigned to it even in that mode though, as it only does 8x8 graphics per tile on the background. If you have lots of characters in your game that are four 8x8 sprites made into a 16x16 object, I&apos;d use 8x16 spites so you can get more of them on the screen myself. You need to plan all this out before you start working on big projects. Although you&apos;re just learning, I&apos;d mess with both. Make a program that works with 8x8 sprites, and then use 8x16 and see the difference first hand. If you need help quick just PM me and I&apos;ll help you, I&apos;m always on line if I&apos;m at my house and will help you. <span class="sprites_emoticons absmiddle" id="emo_smile"></span></div>
				</div><div class="mdl-card--border"></div>