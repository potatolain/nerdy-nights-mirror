<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 3, 2014 at 7:46:02 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Mario&apos;s Right Nut</b></i><br>
		<br>
		I wouldn&apos;t worry about saving sprites at this stage. I&apos;d be surprised if you ever have enough going on (that looks okay) to where you actually run out of them. I&apos;d focus more on making your game look cool and colorful than this stuff.</div>
	<br>
	<br>
	Right now the sprite breakdown for the playing state looks roughly like this:<br>
	<div style="margin-left: 40px;">
		4 - Hero<br>
		1 - Hero&apos;s face<br>
		2-4 - Weapon A<br>
		6 - Weapon B<br>
		20-24 - Enemies (generally four sprites each, maximum of 6 large enemies&#xA0;on a given screen, which yes, I realize is high and will cause scan line issues if measures are not taken)<br>
		10-12 - Enemy weapons (2 sprites each, though this may be reduced)<br>
		? - Dropped items (may be able to reuse enemy sprites?, not sure as I have not tried to do these yet)<br>
		? - Objects, items, etc. (doors, keys, chests, switches,&#xA0;whatever; although some of these could be done with background tiles)<br>
		? - Graphical flair<br>
		2-4 - Weapon B status bar image</div>
	<br>
	It seems to be adding up pretty quickly, but then again there is not a lot more that needs to be accounted for (feel free to point out omissions/oversights). I have probably budgeted too many sprites&#xA0;for certain things, but I&apos;d rather be&#xA0;thinking ahead&#xA0;than running out of room by misusing things unknowingly.<br>
	<br>
	<br>
	I was kind of trying to avoid this, but since it looks like sprites are the way to go&#xA0;when it comes to an inventory screen there&#xA0;results a question.&#xA0;When switching between the playing state and the inventory state, what would be a decent way of preserving the active positions/tiles/attributes of the on-screen sprites? I have BunnyBoy&apos;s update sprite concept working well,&#xA0;meaning that&#xA0;when the start button is pressed the state and screen switch and move all sprites off-screen. When the button is pressed again the game returns to its previous state and the sprites resume their last positions.&#xA0;As it stands, this&#xA0;will work great for cut scenes&#xA0;and other static screens composed solely of background tiles.&#xA0;However, if the inventory screen is made up of sprites and these are updated using the same method&#xA0;as in the playing state (some form of updates will need to occur as weapon and items are added to the player&apos;s inventory), this alters their last position, causing them to move when play is resumed. If&#xA0;there were enough free sprites I could simply move the playing ones off-screen and the inventory ones on-screen, but it seems that the playing sprites (hero, enemies, weapons, etc.) will have to be re-purposed for the inventory screen (8 weapons/items using 2-4 sprites a piece, plus whatever else).&#xA0;A clunky way to preserve their positions would be to save the sprite positions/attributes/tiles to a place holder variable and reload it, but I am guessing that there is a more elegant, and less variable costing&#xA0;method. Of course, the&#xA0;other way to do all of this would be to use background tiles&#xA0;for the weapon/item images, but this will eat up a lot of&#xA0;background tiles. A separate CHR page (pardon the terminology if this is not correct)&#xA0;could be devoted&#xA0;to the inventory screen, but this may not be ideal.&#xA0;Any thoughts?<br>
	<br>
	&#xA0;</div>
<br>
One idea which might help and which I think is reflected in a lot of game engines, NES and modern is to abstract your drawing code away from your &quot;object&quot; code. In other words, you might have some portions of RAM devoted entirely to the abstract idea of an object or &quot;entity&quot; as I call them in my engine. So you might have:<br>
<br>
entity_alive: .res MAX_ENTITIES &#xA0;;where MAX_ENTITIES might be say 8 or something, whatever you want<br>
entity_type: .res MAX_ENTITIES &#xA0;;this could be an index into a look up table of &quot;brain routines&quot; for each object<br>
entity_x: .res MAX_ENTITIES &#xA0;&#xA0;<br>
entity_y: .res MAX_ENTITIES<br>
entity_sprite_lo: .res MAX_ENTITIES<br>
entity_sprite_hi: .res MAX_ENTITIES<br>
<br>
And you&apos;d have a part of your engine called something like:<br>
<br>
.proc update_entities<br>
<br>
&#xA0; &#xA0;;in here, iterate over entity_alive, and for any entity that is alive, look up its &quot;brain&quot; routine using entity_type<br>
&#xA0; &#xA0;;each entity &quot;brain&quot; routine would be responsible for making that entity move the way it is supposed to.<br>
<br>
&#xA0; rts<br>
<br>
.endproc<br>
<br>
and you might also have:<br>
<br>
.proc draw_entities<br>
<br>
&#xA0; ;in here, interate over all entities that are &quot;alive&quot; and call a metasprite drawing routine and pass it entity_x and entity_y, entity_sprite_lo and entity_sprite_hi (the full address of a metasprite for the entity).<br>
<br>
&#xA0; rts<br>
<br>
.endproc<br>
<br>
The metasprite drawing routine would read the metasprite and shovel the sprites into $0200. Exactly *where* it gets shoveled will depend on your game engine. For simpler games that do not require sorting of any kind, a common technique is to store one variable for the last sprite written (a pointer into $0200), and just shovel metasprites into that point, and let that variable keep wrapping around the page. This is a cheap way to implement sprite flickering, too, but for simpler games this typically won&apos;t even show up that much.<br>
<br>
But anyway, I just skimmed a ton of details there...but the main point is that if you can separate out the concept of &quot;make stuff move around&quot; from &quot;draw stuff&quot; and treat the sprite page as just the thing to which you draw things, you can switch states in your game with ease and not worry about what sprites were occupying the sprite page. They would still be in your entity variables.<br>
<br>
Feel free to PM or email me, too, if you are interested in talking more about any of that stuff.
				</div><div class="mdl-card--border"></div>