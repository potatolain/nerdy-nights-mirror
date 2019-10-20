<div class="mdl-card__title"><strong>Kiro</strong> posted on 
		
			
				
				Jan 24 at 7:47:35 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi All,<br>
I&apos;m having trouble getting my head around indexing into a table, it&apos;s been a little while since I&apos;ve had to try and do this but I&apos;ll try and explain what I&apos;m attempting as best I can.<br>
<br>
I have a table of collision data that I want to check against my current sprite location. I can get the sprite locations easy enough and then use the X,Y registers to obtain the index I&apos;m after. (spite is in location 3, 4 for example). So my Y index (3) would be the row in the table and the X index number (4) would be the column.<br>
I grab these and store them in my temp vars<strong> room_pos_x</strong> and <strong>room_pos_y</strong>.<br>
<br>
Example of my table for reference:<br>
BG_COLL_DATA:<br>
.byte $01,$01,$00,$01,$01,$01,$00,$01,$01,$01,$01,$01,$01,$01,$01,$01<br>
.byte $01,$01,$00,$01,$01,$01,$00,$01,$01,$01,$01,$01,$01,$01,$01,$01<br>
and so on...<br>
<br>
I&apos;m then grabbing pointers to my collision table:<br>
LDA #&lt;(BG_COLL_DATA)<br>
STA collisionLo<br>
LDA #&gt;(BG_COLL_DATA)<br>
STA collisionHi<br>
<br>
How can i then index into this table using Y as the row (16byte increments) and x as the column (1 byte increments)?<br>
<br>
I feel like i need to check what the value of room_pos_y is, if it is 3 i need to index in by 32bytes for the row. But I feel this would be inefficient as i would have a massive CMP/Branch block for each of the 16 possibilities.<br>
I think its the 16byte increment bit that&apos;s doing my head in.
				</div><div class="mdl-card--border"></div>