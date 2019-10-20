<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Mar 7, 2018 at 7:57:47 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have been trying to find a way to get my scrolling engine that I made from MRN background compression tutorials and take it and make it work with his background collision detection tutorials.&#xA0; In his tutorials he finds the meta tile as it is compared to the location of the player sprite.&#xA0; It will find the index of the metatile&#xA0;inside the rooms meta tiles.&#xA0; The first index in the room, index zero is for bank switching so the first meta tile is at index 1 in the room.&#xA0; So from what I can tell the meta tile at index 45 should be in column 4 row 5.&#xA0; This all still works unless the player moves and scrolls the screen.&#xA0; So prior to scrolling the room addresses look and work as they are in the top part of the below picture.&#xA0; The balloon is pointing at the first index.<br>
<br>
My problem is when the screen scrolls to the next meta row and it throws the pointer off, shown by the second example with the balloon marked &apos;2&apos;.&#xA0; I have not figured out how to solve this problem.&#xA0; I was thinking that I could still use the index found by his routine and move the index to the next meta tile column (02).&#xA0; This way the index could be the same just starting from the new pointer.&#xA0; And if the column part of the index found is greater than the difference of the column at&#xA0;the index given, then I would need to increase the pointer to the next room and add the rows.&#xA0; I think this would work except the screen scrolls by 8 and the meta tiles are 16 wide, so how do&#xA0;we account for this?&#xA0;<br>
<img align alt border="0" hspace="4" src="scraper/images/1E7D16B6-DC52-35F2-65B7C78EA57C14CD.png" vspace="4" original-src="http://nintendoagemedia.com/users/33780/photobucket/1E7D16B6-DC52-35F2-65B7C78EA57C14CD.png"><br>
Has anyone figured out how to keep track of background collision when scrolling using background compression?&#xA0; Im&#xA0;not looking for a full solution but maybe a different way of thinking that might lead to the answer.&#xA0; I have been staring at this for a week now and am losing hope lol.&#xA0; Any help is greatly appreciated.
				</div><div class="mdl-card--border"></div>