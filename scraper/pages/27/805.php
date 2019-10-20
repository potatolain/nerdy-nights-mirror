<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Jun 12, 2016 at 6:03:04 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
The main difference is how you call a bank switch. I don&apos;t remember all the details of MMC1 (I think I stated MMC3 earlier, but you are right, the tutorial is MMC1).&#xA0; I think the layout is pretty similar.<br>
<br>
This is where I learned about UNROM. It&apos;s not in NESASM format, but the general idea is there.<br>
<a href="http://wiki.nesdev.com/w/index.php/Programming_UNROM" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/Programming_UNROM">http://wiki.nesdev.com/w/index.php/Programming_UNROM</a><br>
&#xA0;</div>
So I&apos;m looking into this now, the bank swapping with CHR RAM with UNROM... and I had a couple questions!<br>
<br>
For The versitility I&apos;m looking for, I know I&apos;m going to want UNROM for certain projects. when I first learned how to do the CHR RAM and partial bank swapping, I leaned that when you up the inesprg value in the header, you have to rearrange your banks or it won&apos;t work. I&apos;m a little fuzzy on how banks are supposed to be &quot;ordered&quot;, especially in a situaltion such as this when most of the banks have the same addresses, and I&apos;m dealing with 8 instead of 2. even with only 2 I&apos;m really lost! what&apos;s a good way to remember how to set up my banks in code, and what would the proper ines header be (since the nesdev site is in NES 2.0)?<br>
<br>
speaking of the header, in a game where I&#xA0;<em>didn&apos;t&#xA0;</em>use a mapper, how many banks can I use in the header? I suppose, as you can have 4 8kb banks, or 2 16kb banks, you can only have up to that with no mapper.<br>
<br>
I know with CHR ROM mappers such it CNROM, it can switch current chr data used by the PPU immediately. is UNROM capable of the same thing? I assume not with how the data is written. I also see in the NES dev page that you can swap to something with music engines and back. would swapping to the sound engine, playing the sound, and swapping back , keep the sound playing, or would the swapping back of code change things? again, I assume since the APU is a separate entity much like the PPU, it would keep playing regardless.<br>
<br>
you mentioned in the post about variables the ones in the $0400-$07FF range. I&apos;d like to store things there, but I&apos;m still not exactly sure what needs to be on the zero page or not. I know pointers do, anything else?<br>
<br>
slightly unrelated, I know that for scrolling you can use one large nametable, but most name table editors are only one screen big. Is it common to save name tables separately, or buffer and scroll off of one, seamed together nametable? if so, what&apos;s the easiest way to do that?<br>
<br>
thanks!<br>
<br>
EDIT: and what&apos;s the difference between having 256KB of PRG ROM an d128KB of CHR RAM if they&apos;re all in the same code, for something like MMC1? bank differences?<br>
EDIT EDIT: looking a littlf further in the nerdy nights for MMC1, I assume &quot;seaming&quot; the names tables together is done by including some sort of indicator of the name tables in either diection from the one you&apos;re in, and switching between which tables you&apos;re writing from in tandem with the changes in mirroring? can UNROM do that too?<br>
<br>
&#xA0;<br>
<br>
<br>
<br>
<br>
<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>