<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Feb 3, 2014 at 10:18:58 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>GradualGames</b></i><br>
	<br>
	Just to add a couple more thoughts: Your play state would be the one that would call update_entities and draw_entities. When you go to something like an inventory state, you&apos;d probably just stop calling those, leaving all the entities at the positions/state they were last in for the time being. Then once in the inventory state, you will clear all the sprites in $0200, and then draw whatever is appropriate for the inventory state (probably not entity objects, depending on your engine, probably just a couple of cursors or what not). When you go back to the play state you&apos;d resume calling update_entities and draw_entities, and again $0200 would have the sprites at the locations they were last updated to. Does any of that make sense or am I going way too fast?</div>
<br>
Hey Derek,<br>
<br>
Your first post is going to take a bit of time to dwell upon, but for the most part I think that I have indeed&#xA0;separated the variable/movement code from the drawing code. The issue is,&#xA0;if the inventory screen is going to be made up largely of sprites, how can these be re-positioned and changed without affecting the update routines in the playing state?&#xA0;I wrote you a nice long message detailing all of my steps and logic, and then somewhere in there I realized that if the inventory screen sprites are updated during the Load Inventory state, but AFTER the LoadSprites routine, they will not affect the playing state positions. Everything resets to its former place once the playing state is called again.&#xA0;This gets rid of any sort of UpdateInventory routine that would be running during the main inventory state (which I had modeled off of the playing state updates),&#xA0;except for a cursor of course.&#xA0;When I tried that approach I may have been doubling variables between the two states, come to think of it, but the solution here works for now. Thanks though for re-clarifying a bunch of things, and bringing up some new things to consider as well. I recently played a game that did not&#xA0;implement sprite flicker and watched as half of the enemies became twice a deadly with their new found invisibility.&#xA0;<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>