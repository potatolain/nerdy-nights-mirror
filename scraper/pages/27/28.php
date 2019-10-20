<div class="mdl-card__title"><strong>gliptitude</strong> posted on 
		
			
				
				May 16, 2013 at 5:43:13 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SegF4ult</b></i><br>
	<br>
	Any program, no matter whether it&apos;s for a NES, PC, GameBoy or <insert here name system>, starts out as flat text. This text is then interpreted by specialized software to build binary files.<br>
	An average length for a full game, that&apos;s a tricky one. It depends on the algorithms you want to use and how efficiently you can implement them.<br>
	<br>
	All games have at least some structural similarities. It is common to structure a game as follows:
	<ul>
		<li>
			Initialize key variables</li>
		<li>
			Start a main game loop (loops are important, otherwise execution would halt)</li>
		<li>
			Poll controller(s) for input</li>
		<li>
			Change variables based on controller input (think sprite placement or something entirely different)</li>
		<li>
			Make extra checks, i.e. collision detection, valid input, etc.</li>
	</ul>
	There are more things you could add. What is important is that the NES/PC/Whatever gets the time to render the screen at some point. Video timing is critical.<br>
	<br>
	As for optimization and tweaks to work properly on a real NES? It depends on the emulator you&apos;re using. No emulator works the same, so what is valid in one emulator could go wrong in the other. What works on an emulator could also fail to work on real hardware.<br>
	There are certainly emulators out there that do a really good job of mimicking the real hardware. Chances are, if it runs in that emulator, it&apos;ll work on the hardware.</insert><br>
	&#xA0;</div>
<br>
This game structure is semi comprehensible to me. ...<br>
<br>
With the question of emulation/console disparity I am coming from an experience with Vectrex, in which (someone else&apos;s homebrew game) looks PERFECT in an emulator, but VERY DISTORTED on the actual Vectrex. ... It appears to me that this is far less of an issue on NES (and other consoles), and that the NES is working with a much more straightforward paradigm of graphics display and organization. &quot;Tiles&quot; and &quot;scrolling&quot; are kind of a built functionality of this machine. Correct???? I know that Vectrex is a very strange point of reference, but in comparison there seems to be much more of a language and a modular structure to &quot;drawing&quot; the graphics on NES.<br>
<br>
You say that &quot;video timing is critical&quot; though, and that time must be allowed for rendering, (if I understand correctly this &quot;time&quot; is tiny fractions of a second, in between other equally brief commands which are constantly being executed and re-executed in a cycle).&#xA0; ... Is it common that major compromises need to be made to the (NES) game program in order to get it to LOOK the way you want it to?
				</div><div class="mdl-card--border"></div>