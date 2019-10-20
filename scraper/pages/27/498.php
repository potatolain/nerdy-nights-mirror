<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 27, 2015 at 5:02:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Three quick questions on sprite/backgrounds overlaps:
<br>
<br>1.
<br>
<br>You have the sprites data to transfer to the PPU each NMI in the page $0200 of the RAM.
<br>And you go from $0200 to $02ff when transferring that data to the PPU.
<br>
<br>So $0200 is the y coordinate of sprite 0, and $0203 is its x coordinate.
<br>And $0204 is the y coordinate of sprite 1, and $0207 is its x coordinate.
<br>
<br>Let say sprite 0 and sprite 1 have the same y coordinate, the same x coordinate, and the same pattern (ie. they overlap); the only thing which change is their attribute, which have the same orienting for both of them, but the subpalette used for the color is different: hence sprite 0 is, fi. red, and sprite 1 is, fi. blue.
<br>
<br>Which sprite will be in front, and which one will be hidden behind the other?
<br>i.e. would you see a red sprite or a blue sprite?
<br>
<br>I know I could set up a quick test on an emulator, but I wish to know for sure how this works on real hardware: sprite 0 is in front or behind sprite 1? And this holds true for all the sprites? I mean having 64 sprites sharing the same position and shape, the last one (ie. y-position $02fc, pattern $02fd, attribute $02fe, x-position $02ff) to be transferred to the PPU is the one which will be on front of all the previous others, or behind all the previous others?
<br>
<br>Thanks in advance to anyone has the answer, on real hardware, for sure.
<br>
<br>
<br>2.
<br>
<br>Also, I know about the fact that sprites can be in front or behind the background, but I can&apos;t remember where you set this option (I always had sprites in front and backgrounds behind so far in my games).
<br>
<br>
<br>3.
<br>
<br>Also, if you set a further color (fi. the second color of a specific subpalette) identical to the transparency color (ie. the first color of that specific subpalette), will that color be drawn, or will it be transparent?
<br>
<br>Let say you set the sprites in front of the background, have a background &quot;black red red red&quot; and the whole background area fully filled with a &quot;solid&quot; red background, and you set &quot;black black yellow green&quot; in a sprite subpalette: the area which use the second color of that sprite will be drawn black above the red &quot;solid&quot; background or not?
<br>I hope all this makes sense in English. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
<br>
<br>
<br>Thank you in advance to anyone can help giving answer for sure on real hardware. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
<br>
<br>- user
				</div><div class="mdl-card--border"></div>