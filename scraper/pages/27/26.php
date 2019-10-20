<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				May 16, 2013 at 5:27:42 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>gliptitude</b></i><br>
	<br>
	<div class="FTQUOTE">
		<br>
		<i>Originally posted by: <b>Shiru</b></i><br>
		<br>
		Program before assembling is a text (source code), usually there are many text files with the code, along with files with various binary data, such as graphics sets, music, etc.<br>
		<br>
		Average length is difficult to say, and it depends from programming language, and data storage approach - sometimes part of it is stored as binary, sometimes it is encoded in the source code, various amounts. Anyway, no less than thousand(s), even a simple one-screen logic game could be like 5000 lines of assembly code or 1500-2000 lines of C code.<br>
		&#xA0;</div>
	<br>
	Thanks for this reply Shiru.<br>
	<br>
	Could you possibly explain to me in a conceptual way, how the &quot;many text files with the code&quot; are grouped together? ... Is it eventually all organized in ONE sequential list of commands (&quot;the program&quot;)? ... Or is it that there is one core program with occasional instructions to &quot;leave&quot; and go to another, or to &quot;retrieve&quot; information from one of the other &quot;text files&quot;? Or are most of these extra files deposited by the cartridge in memory on the console while the program is running?<br>
	<br>
	Or perhaps it is silly to ask these questions at the outset?</div>
<br>
Those are great questions, not silly at all. The answers to them will become more clear over time, but a general answer follows:<br>
<br>
It is optional whether a game program is contained all within one text file or multiple text files before assembled into a final binary ROM that the NES or an emulator reads. Neither an emulator nor the NES can know how many text files created it. The only reason multiple text files are ever used is to help the programmer split up their code into logical chunks. You might have a text file that deals with the camera,&#xA0; a text file that deals with updating all enemies on screen, another to decode the map and perform scrolling, another for generic PPU operations, etc.&#xA0; It&apos;s all about organization.&#xA0; That leaves a ton of details out, but hopefully helps a little.<br>
<br>
<br>
It took a bit for another part of your question to sink in. The NES can *potentially* see up to 64kb of ROM or RAM at any given time. However, the way the cartridge pins and memory pins are wired up to the NES, it can usually only see 2kb of RAM (8kb with wram), and up to 32kb of ROM at any given time. That 32KB of ROM is basically where your text files appear, in binary form. It is typically made up of two 16 kb chunks, and depending on the mapper they can be swapped out, like &quot;windows&quot; into the code that originally appeared in your text files.&#xA0;&#xA0; 2kb of ram is on the NES itself, any additional RAM has to be on the cartridge. All of your program code just stays right on the cartridge---and is read directly by the CPU with the help of the mapper on the cartridge, for letting the cpu dig into various 16kb chunks at a time. Again...I probably glossed over a lot of details, but trying to keep my answers as simple as I can.
				</div><div class="mdl-card--border"></div>