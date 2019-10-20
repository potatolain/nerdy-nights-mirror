<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Sep 15, 2017 at 11:00:54 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Gauauu</b></i><br>
	&#xA0;
	<div class="FTQUOTE" i>
		Originally posted by: <b>SoleGooseProductions</b><br>
		You could set up a routine to check the player sprite against every other sprite, or a certain range of them</div>
	The other thing I would recommend is, as much as possible, do your collision logic based on your logical game actors and not based on sprites or tiles themselves. (ie have a logical bounding box for your main character, and do collision tests based on that bounding box, and not based on the sprites that make up the character. ) This gives you more flexibility if you change how the character is represented in terms of sprites...</div>
<br>
This was a very valuable lesson that I leanred during Spook-o&apos;-tron. Bunnyboy kept saying, years ago, not to directly check against sprite things, but rather to create variables for them. I chalked it up to a waste of variables in Pong and went my own way. Why have an EnemyStatus variable, or 32 of them for that matter, when a &quot;dead&quot; enemy could just have a Y value of 01 for instance. Out of sight, out of mind. Well, let&apos;s just say that it led to a world of problems and that I ended up having to redo all of the sprite handling code at some point <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>. Off-screen enemy collision code started interferring with off-screen projectile and civilian code and I suddenly realized that variables would have solved everything.<br>
<br>
MRN&apos;s background collision system checks against metatiles. It seems to work rather well, at least for 16x16 worlds.<br>
<br>
				</div><div class="mdl-card--border"></div>