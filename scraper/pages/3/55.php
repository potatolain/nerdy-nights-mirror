<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Oct 16, 2012 at 11:06:16 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>jarrodparkes</b></i><br>
	<br>
	I have been doing my best to understand banking; however, I am still a little unclear about why explicitly specifying it is necessary. Here is my understanding and questions, let me know where I am messing up...<br>
	<br>
	1. A bank is portion of memory that is set aside as a holding place for some kind of data (like CHR or PRG)<br>
	2. For the NESASM, banks occupy a space of 8KB<br>
	3. The .bank directive does what exactly? Couldn&apos;t you just get by using a .org directive to navigate to the portions of memory where CHR/PRG data is intended to be stored? Why do you have to specify the .bank?<br>
	4. How are you supposed to know if your PRG memory exceeds a 8KB bank? What would happen if it does?<br>
	5. Are all directives handled pre-assembling? Almost like C++ pre-processor directives?<br>
	<br>
	Thanks,<br>
	Jarrod</div>
<br>
1. Yes, &quot;bank&quot; can mean any arbitrary block of memory, depending on the context. NESASM bank is 8KB, MMC1 bank can be 16KB or 32KB, UxROM bank is 16KB, MMC3 uses 8KB banks, NSF uses 4KB banks, and so on.<br>
2. Yes, this is an arbitrary restriction stemming from the fact that it was originally an assembler for the PC Engine/TurboGrafx-16, which has native support for 8KB banking.<br>
3. It specifies the 8KB multiple of where the data should go in the output file. And yes, other assemblers use .org (and some other directives to reset the address, etc) or some other method (linker memory configuration file in CA65) for the same purpose.<br>
4. The assembler is supposed to tell you. NESASM has bugs in it so it sometimes doesn&apos;t, and will overwrite the beginning of the bank instead. <span class="sprites_emoticons absmiddle" id="emo_wink"></span><br>
5. Yes.<br>
<br>
				</div><div class="mdl-card--border"></div>