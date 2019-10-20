<div class="mdl-card__title"><strong>SegF4ult</strong> posted on 
		
			
				
				May 16, 2013 at 9:57:17 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Parpunk</b></i><br>
	1. In games like Super Mario Bros. (side scrolling) in a nutshell, is a game like this contain way more code then a game that is not side scrolling?<br>
	2. To make your sprite on screen move to the direction of the D pad being pushed, is this a simple code to enter that will connect it, to the D pad? or does it consist of tons of codes just to make it possible to have control of a character.<br>
	3. When a character jumps on screen, Is it contained in the programming of how fast/smooth/high/far it can jump? Never understood this in games like adventure island where you can sorta feel your jump by how long you hold down the jump button etc. for small jumps.</div>
I am by no means a veteran, nor have I written any sort of game for the NES, however, I am a programmer. So let&apos;s start this off. All of the tools most people use can be found at&#xA0;<a href="http://nesdev.com/#PC" target="_blank">http://nesdev.com/#PC</a><br>
I&apos;ll try to answer the rest of your questions to the best of my ability.<br>
<ol>
	<li>
		I wouldn&apos;t say it has substantially more code. It all depends on how you define your levels. Scrolling is quite tricky to implement (to be honest, I don&apos;t have any idea where to start to do scrolling). The amount of code is greatly dependant upon your algorithm.</li>
	<li>
		To make a character sprite move isn&apos;t as straightforward as &apos;connecting&apos; a button to the sprite. You read in the state of all the buttons (the entire NES pad) and then check to see if a certain bit is a logic 1. You then write code that tells the NES to increment or decrement a certain variable based on the status of these bits coming from the NES pad.</li>
	<li>
		All of a character&apos;s movements are contained in the programming. See my #2 answer,&#xA0;it is a simple matter of incrementing or decrementing variables based on external variables, say time.</li>
</ol>
				</div><div class="mdl-card--border"></div>