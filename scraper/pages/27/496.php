<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 17, 2015 at 9:10:33 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Vectrex280996</b></i><br>
	<br>
	If you do a sprite zero check to see if the car got out of the track, you can only have a transparent colour on the track, and it becomes a major hassle when you have 16x16 sprites and/or multiple sprites. Trust me,<strong> I thought about doing this too and it&apos;s not worth it</strong>. A better solution would be using the MMC1 because you have the additionnal WRAM, which expands the RAM by a LOT. That way, you have enough space to do collision checks on every part of the track. Also, you can load the data from the ROM and stick it in the aforementioned RAM each time you load a new track. With 256KB of ROM, you can have a lot of tracks in the game that way.</div>
<br>
<br>
Thanks for the reply.<br>
<br>
I got to your same (highlighted in <strong>bold</strong>) conclusions, but for different reasons: rotate between the cars sprites which one is sprite 0 is an added complexity, and it is too slow anyways being a check that would work only once every 4 frames, with 4 cars on the track.<br>
<br>
I implemented instead my alternative solution, which is check points (ie. a virtual line crossing the track each begin and end of a curve) that when crossed generate the coordinates of a &quot;box&quot; where the car is supposed to be next, and a quick &quot;collision&quot; routine with that box each subsequent frame (to make sure the car is inside it).<br>
<br>
Even using only 32kB of ROM space and not using WRAM, I am not facing ROM/RAM space issues so far, even with many tracks, since their data can be easily compressed; and the boxes generated only need 4 byte each. But I will in future look with interest to these alternatives you propose.<br>
<br>
Scrolling will not be included either, since with 4 players each can have his car in a different position of the track, so unless splitting the screen in 4 (not so simple to do on a NES), this cannot be implemented.<br>
<br>
So, ironically, since I implemented different solutions, everything I learned from the first two of the above three questions I asked, will likely be useful in future projects, but not on this specific project.<br>
<br>
Thanks to all for all the replies, it is useful to have a direct link to all these documents linked.<br>
<br>
Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user<br>
<br>
<br>
@MadnessVX<br>
With only one car, it would probably be an efficace solution, or at least make more sense &quot;collision reaction time&quot; wise.<br>
<br>
<strong>Edit</strong>: mispelling.
				</div><div class="mdl-card--border"></div>