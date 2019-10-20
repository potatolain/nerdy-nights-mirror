<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jun 12, 2016 at 9:38:38 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>RockyHardwood</b></i><br>
&#xA0;
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
&#xA0;</div>
This is a very long document, but there is a great section about headers and mappers.<br>
<a href="downloads/missing/neshdr20.txt" target="_blank" original-href="https://github.com/thentenaar/nesasm/blob/master/documentation/neshdr20.txt">https://github.com/thentenaar/nes...</a><br>
<br>
I&apos;m going to try to answer some of this with sleep depervation. Seems to be a lot of thinking out loud questions in this post. Hopefully I hit them all.<br>
<strong>what&apos;s a good way to remember how to set up my banks in code, and what would the proper ines header be</strong><br>
I use that link I posted above. A lot of this is still fuzzy to me as well. I don&apos;t know if I will ever fully understand mappers as each one handles banks and bankswitches differently.<strong> </strong><br>
speaking of the header, in a game where I&#xA0;<em>didn&apos;t&#xA0;</em>use a mapper, how many banks can I use in the header? I suppose, as you can have 4 8kb banks, or 2 16kb banks, you can only have up to that with no mapper.<br>
<br>
<strong>I&apos;m a little fuzzy on how banks are supposed to be &quot;ordered&quot;, especially in a situaltion such as this when most of the banks have the same addresses, and I&apos;m dealing with 8 instead of 2.</strong><br>
Let&apos;s say that you have 8 16kb banks (like what I use with UNROM). I have mine set up to have $8000-$BFFF to be the part of memory that I can swap, $C000-$FFFF is fixed (can&apos;t be swapped). So, any important code like IRQ&apos;s and NMI and my game engine stay in the fixed bank.<br>
With that in mind, that means you can setup multiple 8kb banks with .org $8000 and .org $A000. Like this:<br>
;----------------------------------------------------------<br>
;-----------------------BANKS------------------------------<br>
;----------------------------------------------------------<br>
;;;;;;;;;;;;;;;;;bankSource=00;;;;;;;;;;;;;;;;;;;;&#xA0;&#xA0; 16KB Swappable<br>
&#xA0; .bank 0&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; ;8KB &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; .org $8000 &#xA0;<br>
&#xA0;<br>
&#xA0; .bank 1&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;8KB<br>
&#xA0; .org $A000<br>
;;;;;;;;;;;;;;;;;bankSource=01;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 2&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
&#xA0;&#xA0;&#xA0;<br>
&#xA0; .bank 3<br>
&#xA0; .org $A000<br>
;;;;;;;;;;;;;;;;;bankSource=02;;;;;;;;;;;;;;;;;;;; &#xA0;<br>
&#xA0; .bank 4&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 5<br>
&#xA0; .org $A000<br>
;;;;;;;;;;;;;;;;;bankSource=03;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 6&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
&#xA0;<br>
&#xA0; .bank 7<br>
&#xA0; .org $A000<br>
&#xA0; ;;;;;;;;;;;;;;;;;bankSource=04;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 8&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 9<br>
&#xA0; .org $A000<br>
<br>
;;;;;;;;;;;;;;;;;bankSource=05;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 10&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 11<br>
&#xA0; .org $A000<br>
&#xA0;<br>
;;;;;;;;;;;;;;;;;bankSource=06;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 12&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 13<br>
&#xA0; .org $A000<br>
<br>
;;;;;;;;;;;;;;;;;bankSource=07;;;;;;;;;;;;;;;;;;;;<strong>&#xA0; FIXED</strong><br>
&#xA0; .bank 14 &#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; .org $C000<br>
<br>
&#xA0; .bank 15<br>
&#xA0; .org $E000<br>
<br>
So, the when I start my program, I tell it to bankswap to bank 0. This mean that my current setup looks like this:<br>
;;;;;;;;;;;;;;;;;bankSource=00;;;;;;;;;;;;;;;;;;;;&#xA0;&#xA0; 16KB Swappable<br>
&#xA0; .bank 0&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; ;8KB &#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; .org $8000 &#xA0;<br>
&#xA0;<br>
&#xA0; .bank 1&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;8KB<br>
&#xA0; .org $A000<br>
;;;;;;;;;;;;;;;;;bankSource=07;;;;;;;;;;;;;;;;;;;;<strong>&#xA0; FIXED</strong><br>
&#xA0; .bank 14 &#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; .org $C000<br>
<br>
&#xA0; .bank 15<br>
&#xA0; .org $E000<br>
<br>
Now, let&apos;s say I need to get some code in .bank 8. I would then bankswap to the 16kb bank 4 (designated as bankSource 4 in my code). When that happens, my memory now looks like this:<br>
;;;;;;;;;;;;;;;;;bankSource=04;;;;;;;;;;;;;;;;;;;;<br>
&#xA0; .bank 8&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; .org $8000<br>
<br>
&#xA0; .bank 9<br>
&#xA0; .org $A000<br>
;;;;;;;;;;;;;;;;;bankSource=07;;;;;;;;;;;;;;;;;;;;<strong>&#xA0; FIXED</strong><br>
&#xA0; .bank 14 &#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0; .org $C000<br>
<br>
&#xA0; .bank 15<br>
&#xA0; .org $E000<br>
<br>
All you are doing on a bank swap is pointing to different areas in memory. Since I have 8 banks that are 16KB, I have 128KB of PRG storage. All bankswapping is doing is telling the program to point to a different point in storage to get the data for $8000-$BFFF. Think of it like shelves. You have 8 shelves but you can only use 2 at a time. The bottom shelf you must always use (fixed banl). So, you can now freely use 1 of the other 7 shelves (swappable). If the stuff you need is on another shelf, you simply stop using the one shelf and start focusing on the other shelf. Lame example, but I hope the visual helps.<br>
<br>
<strong>speaking of the header, in a game where I&#xA0;<em>didn&apos;t&#xA0;</em>use a mapper, how many banks can I use in the header? I suppose, as you can have 4 8kb banks, or 2 16kb banks, you can only have up to that with no mapper.</strong><br>
You answered your own question here. No Mapper = No Bank Swapping. So, you only have 32kb on ROM space to work with. Bank swapping removes this limitation and allows you swap data in and out of the the CPU registers $8000-$FFFA (PRG). Some mappers allow you to swap CHR data on the PPU during an interrupt<strong> </strong>(CHR-ROM).<br>
<br>
<strong>I know with CHR ROM mappers such it CNROM, it can switch current chr data used by the PPU immediately. is UNROM capable of the same thing?</strong><br>
No. UNROM uses CHR-RAM, so you store the tiles in PRG-RAM and then you have to copy that tiles to CHR-ROM during a vblank. If you are swapping out a large amount of tile (more than ~32), then you need to disable the PPU (turn the screen off).<br>
<br>
<strong>I also see in the NES dev page that you can swap to something with music engines and back. would swapping to the sound engine, playing the sound, and swapping back , keep the sound playing, or would the swapping back of code change things?</strong><br>
Correct. You can store all of you music data in 1 bank. Your music engine only calls for 1 note to be played per frame, so you can call for that data by swapping in that bank, run your music note updating code (in the nmi), and then swap away from that bank with the music code. I know exactly what nesdev page you are talking about, its a great resource.<br>
<br>
<strong>you mentioned in the post about variables the ones in the $0400-$07FF range. I&apos;d like to store things there, but I&apos;m still not exactly sure what needs to be on the zero page or not. I know pointers do, anything else?</strong><br>
This still confuses me a bit, but usually I use the Zero Page for variables that I need to call quickly (with PPU on) and for pointers. Honestly, most of my variables are in Zero Page. I use $0400-$07FF to store large amounts of data that I can call when the PPU is off, such as a copy of my current attribute table, copy of my current palette table, name table code (great for storing data that was on the screen before a popup window so you know what data was in that area for when you want the window to go away), history code (something happened 3 turns ago but i want to remember it just in case, etc.<br>
<br>
<br>
<strong>slightly unrelated, I know that for scrolling you can use one large nametable, but most name table editors are only one screen big. Is it common to save name tables separately, or buffer and scroll off of one, seamed together nametable? if so, what&apos;s the easiest way to do that?</strong><br>
No idea, I have never attempted scolling. Hopefully someone else can help you with this.<br>
<br>
<strong>and what&apos;s the difference between having 256KB of PRG ROM an d128KB of CHR RAM if they&apos;re all in the same code, for something like MMC1? bank differences?</strong><br>
In MMC1, those are not in the same code. I could be way off on this, but if I understand MMC1 correctly, Its PRG ROM and CHR ROM. This is the example of if you are swapping CHR data, you can animate backgrounds. You can&apos;t do that with UNROM.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>