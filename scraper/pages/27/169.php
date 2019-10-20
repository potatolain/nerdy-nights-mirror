<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 17, 2014 at 10:49:09 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Alder</b></i><br>
	<br>
	Great question. I agree with Derek. What matters most is that the game runs smoothly with minimal bugs. A playable game with messy code is arguably better than a half-finished demo with elegant code.<br>
	<br>
	However, I would like to stress code modularity. There&apos;s a difference between inefficient (un-optimized) algorithms and unstructured code. It&apos;s worth taking the time to think ahead and abstract your code down to the simplest possible modules. In other words, writing an entire game in one huge function would be a nightmare to debug or modify, even with elegant code. So code structure is more important than elegance when it comes to editing your game by scaling and maintaining your code.<br>
	<br>
	TL;DR: write functions that are well-defined and optimize them later, as needed.<br>
	<br>
	This is coming from someone who still hasn&apos;t touched 6502, so take it with a grain of salt</div>
<br>
yes, modularity of code is just as important in 6502 as any other language. I&apos;ve found it&apos;s possible to write very clean/readable code in pure 6502 with very little language level abstraction, or even macros. Often, an optimization can be found at a higher, architectural level that is influenced by the mechanics of your game that will give you more bang for your buck than squeezing every last cycle out of the CPU.<br>
<br>
KHAN: That&apos;s a good way of looking at it, from the perspective of your players. For yourself though, being the programmer, you have the most to gain from thinking about the &quot;right way,&quot; as it can increase efficiency of development and reduce the number of bugs you may have to work through. &#xA0;Note, in saying this I do not claim to be perfect at getting things right, code wise. I have a backlog of bugs and am aware of many flaws in my own code as well. It is something we all ought to think about.<br>
<br>
				</div><div class="mdl-card--border"></div>