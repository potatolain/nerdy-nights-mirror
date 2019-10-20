<div class="mdl-card__title"><strong>SegF4ult</strong> posted on 
		
			
				
				May 16, 2013 at 4:04:26 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Sniglet</b></i><br>
	<br>
	Ok I&apos;ve got a few questions. I only just started seriously collecting and also only just found out about these homebrew carts and repros and such. So i hope my questiosn are relevant... maybe not lol.<br>
	<br>
	1. I noticed someone offering really nice repros but only with certain donor carts. Why wont just any cart work?<br>
	2. How does one actually put a new game onto an old one? for example, placing Final Fantasy V onto an SNES sports game.<br>
	3. How do people make these super awesome personalized carts and labels such as with Battle kid?<br>
	4. What kind of programs and or equipment would be required should I study up more and decide i want to make my own games on carts? Where does one even begin?<br>
	5. Is this something someone could persue who has no prior knowledge of such activities?</div>
<ol>
	<li>
		Not just any cart works because of hardware differences. Carts have a certain memory mapping chip depending on the amount of memory the ROM needs to be written on. Without this &apos;mapper&apos;, the NES wouldn&apos;t be able to properly find instructions and data from the big amount of memory inside the cart.</li>
	<li>
		You can&apos;t just put new games on an old cartridge most of the time. The old memory chips are removed from the board and replaced by compatible rewritable memory.</li>
	<li>
		That&apos;s an entirely different ballpark altogether. Printing quality labels is dependant on the printer, the paper you use, the method you use of adhering it to the cartridge. Some use a clear film over the label, others don&apos;t. There are a lot of ways to do labels. As for personalized cartridges, retrousb.com sells translucent NES carts, you could however also opt to make your own molds and cast these cartridge shells by hand, but it&apos;s a ridiculously pricy process</li>
	<li>
		First of all, stick to developing roms that work in an emulator. Once you&apos;re ready to go the cart route, you&apos;d need an (E)EPROM programmer with appropriate software and some software to split up your game ROM into a PRG and a CHR rom.</li>
	<li>
		It is always worth pursueing something you&apos;re interested in, it is entirely possible to do so. The journey is one filled with knowledge.</li>
</ol>
<div class="FTQUOTE">
	<i>Originally posted by:&#xA0;<b>gliptitude</b></i><br>
	<br>
	What does a &quot;program&quot; look like, before you &quot;assemble&quot; it?<br>
	<br>
	What would an average length (in lines) be for a full (NES) game program?<br>
	<br>
	Do all (NES) programs have structural similarities? How is a program structured?<br>
	<br>
	Do (NES) programs have to be optimized and tweaked in order to display properly on a real NES, (avoid slowdown and graphics glitches)? Is there a big disparity between emulation and the real rom/cart/console?<br>
	<br>
	Is DMG Gameboy somehow impossible to program for?<br>
	<br>
	Can you answer these questions in a way that some one who has never programmed anything before can understand?</div>
Any program, no matter whether it&apos;s for a NES, PC, GameBoy or &lt;insert system name here&gt;, starts out as flat text. This text is then interpreted by specialized software to build binary files.<br>
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
There are certainly emulators out there that do a really good job of mimicking the real hardware. Chances are, if it runs in that emulator, it&apos;ll work on the hardware.<br>
<br>
Gameboys aren&apos;t impossible to program for. They use different hardware, among which a different CPU. So it&apos;s a different instruction set, different architecture, etc.<br>
The Gameboy and Gameboy Colour use a modified Zilog Z80, so reading up on Z80 assembler could work for that. Otherwise, there are also probably C compilers available.<br>
<br>
<br>
I&apos;ve tried to explain these concepts to the best of my ability, if there are certain things that aren&apos;t clear, just send me a PM or let me know here.
				</div><div class="mdl-card--border"></div>