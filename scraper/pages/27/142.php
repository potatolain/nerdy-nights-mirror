<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 3, 2014 at 7:55:57 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Just to add a couple more thoughts: Your play state would be the one that would call update_entities and draw_entities. When you go to something like an inventory state, you&apos;d probably just stop calling those, leaving all the entities at the positions/state they were last in for the time being. Then once in the inventory state, you will clear all the sprites in $0200, and then draw whatever is appropriate for the inventory state (probably not entity objects, depending on your engine, probably just a couple of cursors or what not). When you go back to the play state you&apos;d resume calling update_entities and draw_entities, and again $0200 would have the sprites at the locations they were last updated to. Does any of that make sense or am I going way too fast?
				</div><div class="mdl-card--border"></div>