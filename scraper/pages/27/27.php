<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				May 16, 2013 at 5:40:31 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>JKeefe56</b></i><br>
	<br>
	I hate to ask something like this, because I feel like it&apos;s asking too much. But I&apos;m working on a puzzle game. I can make a level of it, but then I get stuck. Is there anyone willing to write out a code to show me, that would do something like this, just so I can see how it is done?<br>
	<br>
	Just load a background screen and then when a certain button is pressed it loads the next background?<br>
	<br>
	I&apos;ve gotten stuck here a few times. Or if there&apos;s a NN that covers this that I missed, could you point me in that direction?</div>
<br>
Basically, you have to create a subroutine that is activated when something happens.&#xA0; i.e. your score reaches a level, you die, you win, etc.&#xA0;<br>
<br>
Just have it set a flag that allows your subroutine to run.&#xA0; This routine will switch the game state, load the status screen, clear the variables in the level RAM, and then sit there and wait for you to push Start or something.<br>
<br>
Then you push start and it loads the next level, changes the game state, and dumps the player into the next level.&#xA0;<br>
<br>
It is challenging, but you just have to think:&#xA0; Okay, what did I do to get the first screen to load?&#xA0; Sprites, background, initilize all the RAM required to run the room, etc.&#xA0; Do this every friggin&apos; time you load a room or different level, set, death, and stuff.&#xA0;<br>
<br>
It would probably be easier with an example, but I really don&apos;t have time to whip up another tutorial right now.&#xA0; Hope that helps though.&#xA0;<br>
<br>
				</div><div class="mdl-card--border"></div>