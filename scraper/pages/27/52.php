<div class="mdl-card__title"><strong>Roth</strong> posted on 
		
			
				
				Jun 5, 2013 at 11:43:34 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>NESHERO27</b></i><br>
	<br>
	A couple of general questions:<br>
	<br>
	1. Regarding compilers, what type of differences exist between each of them. Are they essential differences, or &quot;merely&quot; matters of how one goes about writing code? The reason that I ask is that I read somewhere a while back (cannot recall where) some rather negative remarks about NESASM3 and did not know if learning another compiler would be necessary in the near future. Will NESASM3 get the job done when it comes to making games? I have a feeling that it will, and if it did not have some critics I would be worried (like fifty glowing Amazon reviews for the next piece of exercise equipment), but I thought that I would check. If anyone has continued to use NESASM3 beyond the Nerdy Nights tutorials I would be interested to know. I saw some discussion on NESdev, but it was geared more toward &quot;name your favorite compiler,&quot; and it did not seem to address general or generally specific differences between the different options.<br>
	<br>
	2. In terms of graphics, what purpose do programs like Tile Layer Pro serve for the homebrewer? Most of the information that I have been able to find about this type of program relates to ROM hacking so even a broad overview would be helpful (or a link to a broad overview). Is this somewhat similar to the map editor that Sivak wrote for his games, or that Maiu posted a while back for Project P (<br clear="all"><div class="col-md-6"><div class="embed-responsive embed-responsive-16by9"><a href="https://www.youtube.com/DjYeB604a1s?list=UUGNm2vGRTPwbO0Q6u-X7MuA">Youtube</a></div></div><br clear="all">)? It would appear that at least the latter programs would alleviate some of the need for coding each individual tile of the background (not trying to bypass that essential skill, but just looking ahead).<br>
	<br>
	Thanks in advance!</div>
<br>
1. It&apos;s not so much HOW you write things, but more of what features are available to ease how you code, I guess you could say. From what I can tell, the assemblers that people generally find the most easy to set up and get started for NES programs are ASM6 and NESASM. I believe Sivak also uses NESASM, so it seems to work fine for bigger projects.<br>
<br>
2. Tile Layer Pro is pretty much exclusively for making the 8x8 tiles for the graphics. It doesn&apos;t do anything like help you arrange background tiles into readable data for games. People usually make their own programs to ease the process of making backgrounds. If your backgrounds aren&apos;t too complicated, you can just enter the data into an ASM file. I had no problems using this method for NES Virus Cleaner, because the backgrounds were pretty much 5 or so different 16x16 tiles, and it was single-screen gaming. It all depends on how big your game is going to be, or if you need any compression at all for your backgrounds. 8name from the Pin Eight tools or the aforementioned NESST can be used to make nametables without compression, and used directly in your game. You just have to remember that each uncompressed nametable is 1k worth of data. It&apos;s all pretty much game specific.<br>
<br>
				</div><div class="mdl-card--border"></div>