<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Oct 15, 2015 at 11:30:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The breakdown looks like this I guess.
<br>
<br>$0000-00FF - zero page, reserved for pointers and other special things
<br>$0100-01FF - stack
<br>$0200-02FF - sprites
<br>$0300-03FF - music
<br>$0400-04FF - 256 free
<br>$0500-05FF - 256 free
<br>$0600-06FF - 256 free
<br>$0700-07FF - 256 free
<br>
<br>So, that leaves 1024 bytes free for additional variables. If I have 256 or so items, that is reduced to 758, and character stats will take another significant chunk, unless I just use tables and do not randomize the level bonuses.
<br>
<br>So I guess the question remains, is there a way to get more spaces? Lacking the terminology here, but you folks know what I mean.
				</div><div class="mdl-card--border"></div>