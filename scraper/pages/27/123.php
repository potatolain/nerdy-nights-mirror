<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Jan 23, 2014 at 7:08:42 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Looking back at the Nerdy Nights, I have tried to apply what you mentioned to what was in the lessons. Conceptually, at least, here is what I have:<br>
<br>
-Move/Collide Players/Enemies: variables are assigned in the zero page, such as ballx, bally, paddle1ytop, paddle2ybot, etc. When moving these objects, or determining collisions, these variables are called and NOT $02xx (or SPRITE_BANK/RAM+xxx, assuming that these are constants that begin at $0200 or somewhere like that).<br>
<br>
-Render Sprites: Not entirely certain on this one, but this appears to be equivalent to the UpdateSprites routine in Week 9. Each room would have one(/several?) of these that loads into (write) the sprite page what is needed on the present screen. This will involve a rather lengthy routine for each room, or for each type of object to be updated; see below for what I think I mean.<br>
<br>
-Fill: This is equivalent to the LoadSprites routine and the accompanying tables? One of these would be needed for each room. This did not appear to be included in Week 9, since there is not a LoadSprites routine and also if the table is commented out the program seems to run no different (though I could be wrong).<br>
<br>
<br>
<br>
Summary: The fill routine gives the default values for the room (although this would mean that it is read from, but only prior to the room loading. Hmm...). The render routine is where the object variables are read from, and they are the values that are written back to the fill portion of code. Movement/collisions use object variables, NOT sprite page addresses.<br>
<br>
<br>
<br>
If the above makes sense, I think that my main source of confusion was in equating $02xx/SPRITE_RAM+xx with object variables (ballx, bally, etc.) since they can at times functionally be the same. If I INC or DEC $0200 I can change the y position of the first sprite (though I now know that I should not). It was such a nice system since it eliminated the middle man (variable). I have wondered since last July why they were part of the code, now I know <span class="sprites_emoticons absmiddle" id="emo_smile"></span>. Out curiosity, where should I reserve spaces for object variables? Should these still be in the zero page as they are in the NN? If each sprite has four elements (y, tile, attribute, x), will I need to reserve 256 spaces? It should then be a simple processing of finding/replacing the old SPRITE_BANK+xxx addresses with the new variable. These, of course, could be divided between the different elements of the game, such as Hero, Weapons, Enemies, etc. Different update routines, such as UpdateHero, UpdateWeapons, UpdateEnemies, etc., would be used for the rendering portions(?). Let me know if any of this is on track, hopefully some of it is. Connections to the NN would be helpful, if there are analogous elements. And thanks! I have been avoiding sprites for far too long, and this is really helpful. If nothing else, just trying to figure them out is a step in the right direction.<br>
<br>
<br>
<u>Edit/Update</u>: I switched everything around and it all appears to be working using the logic above <span class="sprites_emoticons absmiddle" id="emo_smile"></span> Also added in MRN&apos;s move one sprite, move the whole meta-sprite routine, which works wonderfully! Code is much more simplified now, though does it save on space/memory?<br>
				</div><div class="mdl-card--border"></div>