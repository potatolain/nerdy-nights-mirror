<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				May 16, 2013 at 9:51:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Parpunk</b></i><br>
	<br>
	Here&apos;s a great one<br>
	<br>
	Can some vets post the tools and programs they use to get started, and links to where to download them etc.<br>
	<br>
	1. In games like Super Mario Bros. (side scrolling) in a nutshell, is a game like this contain way more code then a game that is not side scrolling?<br>
	2. To make your sprite on screen move to the direction of the D pad being pushed, is this a simple code to enter that will connect it, to the D pad? or does it consist of tons of codes just to make it possible to have control of a character.<br>
	3. When a character jumps on screen, Is it contained in the programming of how fast/smooth/high/far it can jump? Never understood this in games like adventure island where you can sorta feel your jump by how long you hold down the jump button etc. for small jumps.<br>
	<br>
	I dunno know im sure i have a million more, but just the simplest of things confuse me before even getting started lol</div>
<br>
1. I&apos;d say that one-way scrollers like SMB1 probably don&apos;t have much more code than a single screen game. The reason is that the persistence of enemies and destructible blocks only needs to last as long as they are onscreen. For a two-way scroller, suddenly you have to decide how long things are allowed to live off screen. Most games solve this with re-spawning, but re-spawning itself introduces the problem of how many instances of an enemy are allowed to be created. It&apos;s really when you get to two way scrollers that things begin to get hairy.<br>
<br>
2. Moving a character with the d-pad doesn&apos;t involve much code, even when it is done with more advanced techniques.<br>
<br>
3. A jump works by adding a velocity value onto a height value. And then, on every frame, an acceleration value is added to the velocity. Typically, the velocity will start out negative, making your character rise (going downwards is actually positive Y instead of upwards as is traditional on graph paper).&#xA0; Eventually the velocity will go zero and then start to make your character go downwards again (because acceleration keeps getting added to it, the velocity might change from -5 to -4 to -3 to -2 to -1 to 0 to 1 to 2 to 3 to 4 to 5.....uuuup.......dooowwwn..... make sense?). This simple setup produces a smooth jump arc.&#xA0;&#xA0; The jump can be stopped at any time by detecting that the jump button was released.<br>
<br>
....that might be a great topic for a video....kinda hard to explain in a little paragraph! Maybe some others can help clarify this.<br>
				</div><div class="mdl-card--border"></div>