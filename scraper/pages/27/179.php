<div class="mdl-card__title"><strong>chowder</strong> posted on 
		
			
				
				Mar 15, 2014 at 1:12:35 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					OK, I&apos;m stuck on the easiest way to do do player + bg collision detection.  I&apos;ve got it working with hard coded bounding boxes - basically, there are currently 6 variably sized blocks on a screen that should be impassible, so I coded the coords in for them, then compare them to the player sprite&apos;s box to see whether the movement should be allowed.  Works great, but I can&apos;t be bothered changing the coords every time I alter the level structure.
<br>
<br>With the following limitations in mind, what&apos;s the easiest way of doing this?
<br>
<br>1.) No scrolling.  Each screen is static.
<br>2.) I&apos;m not using metatiles, or even nametable compression at the moment.
<br>
<br>I thought of maybe just checking directions eg: sprite wants to move up, so check the tile one row up in the nametable, if it&apos;s solid, don&apos;t allow movement.  This would then cause issues where it&apos;s fixed to tile boundaries, so the sprite could potentially be stopped almost a full 8 pixels before the actual obstruction...  &quot;Pixel exact&quot; would be good.
<br>
<br>I&apos;m missing something really obvious, I&apos;m sure, but I can&apos;t figure it out <span class="sprites_emoticons absmiddle" id="emo_sad"></span>
<br>
<br>Thanks for any help.
<br>
<br>
				</div><div class="mdl-card--border"></div>