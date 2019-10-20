<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 20, 2016 at 10:52:29 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>RockyHardwood</b></i><br>
<br>
Heyo! I&apos;ve been going through the tutorials and wanted to read up on mappers and swapping to try and understand what it actually does...<br>
<br>
for instance, I&apos;m trying to create a text engine for later down the line, and because text tiles take up a lot of space, I figure it&apos;s be best to use mapping when a text box appears. What I don&apos;t understand from the tutorial, however, is what all actually changes in a swap. Will all tiles on the screen change to fit the swap, or only the ones I&apos;m changing? Like if I used a separate bank for the text and text boxes, would simple mapping work to bring it up without messing with the rest if the background?</div>
Bank swapping is swapping all code in that bank, it&apos;s not necessarily just tiles, it can be regular game code as well. I usually it use it to swap large amounts of data, such as music, backgrounds, chr files.&#xA0; What you are swapping is ROM data in the memory and making inactive ROM active. So, your ROM data is stored in 4 8KB banks or 2 16kb banks:<br>
---------16kb Swappable---------------<br>
BANK 0 = $8000-$9FFF = 8KB<br>
BANK 1 = $A000-$BFFF = 8KB<br>
---------16kb Swappable---------------<br>
BANK 2 = $8000-$9FFF = 8KB<br>
BANK 3 = $A000-$BFFF = 8KB<br>
---------16kb Swappable---------------<br>
BANK 4 = $8000-$9FFF = 8KB<br>
BANK 5 = $A000-$BFFF = 8KB<br>
---------16kb Swappable---------------<br>
BANK 6 = $8000-$9FFF = 8KB<br>
BANK 7 = $A000-$BFFF = 8KB<br>
---------16kb Swappable---------------<br>
BANK 8 = $8000-$9FFF = 8KB<br>
BANK 9 = $A000-$BFFF = 8KB<br>
---------16kb Swappable---------------<br>
BANK 10 = $8000-$9FFF = 8KB<br>
BANK 11 = $A000-$BFFF = 8KB<br>
---------16kb Swappable---------------<br>
BANK 12 = $8000-$9FFF = 8KB<br>
BANK 13 = $A000-$BFFF = 8KB<br>
----------16kb Not-Swappable--------- &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
BANK 14 = $C000-$DFFF = 8KB<br>
BANK 15 = $E000-$FFFF = 8KB<br>
<br>
In my code (using Mapper 2, Unrom), I can swap 1 16kb bank (each mapper has its own swapping rules, this is for UNROM. Even this can be defined further when setting up the mapper). Banks that contain address $8000-$BFFF are swappable. Thus, you need to put your main code in banks 14 and 15 as that cannot be swapped out.&#xA0; When your game starts, it will boot up with Banks 0, 1, 14 and 15 as the active banks. At any time, you can swap out the code in Banks 0 and 1 (16kb) with any other pair of 16kb banks, such as Banks 2 and 3. The data in banks 0 and 1 are now not usable and only the data in Banks 2 and 3 are. Essentially, you are reading ROM data from registers $8000-$FFFF and the front half can be swapped out so you can store more data. As stated before, each mapper handles swapping differently and can allow for different amount of ROM storage.&#xA0; In the example above, I&apos;m using UNROM with 128KB of space. I can only access 32kb at a time, but I can swap in and out 16kb of data at anytime during the code. I also use CHRAM, which means that when I switch to a bank storing graphic tiles, I have to reload the PPU with new graphics while the PPU is turned off. In this case, I disable the CPU, swap banks to banks 2 and 3 where I store more graphic tiles, load the new tiles into CHRAM in the PPU, and then swap banks back to my game code in banks 0 and 1. With CHRAM, you can swap freely swap banks without messing with your background tiles. The only way you can manipulate background tiles is to reload the CHRAM with new tiles. You can even just swap out small parts of CHRAM background tile and not the entire 8kb if you like. I do this in my game with character profile pictures by swapping out only 16 tiles instead of the entire 256 tiles, but I do this with the PPU turned off.<br>
<br>
On the other hand, if you are wanting to animate the background tiles with 2 different sets of background tiles (I think Mario 3 does this on the level 1 map with the dancing bushes), you must move to a mapper that can do CHROM, such as MM3 (mapper 3). I think bunnyboy&apos;s tutorial covers this in Advance Nerdy Nights. I haven&apos;t really tried it, but you would store your graphics files in seperate swappable banks and then swap back and forth between the banks. Again, I&apos;m not as well versed on this as I have never messed with CHROM. I do believe that this is a full 256 tiles swap, but don&apos;t quote me. Maybe there are tricks that other&apos;s more knowledgeable than myself can tell you.<br>
<br>
Hope that was all clear as mud. I may not be the best at explaining bank swapping across different mappers as I really don&apos;t venture much out of UNROM at this point.<br>
<br>
IMPORTANT NOTE: NESASM3 banks are 8kb. BUT when you swap banks, it looks at 16kb at a time, $8000-$BFFF. So, when you tell the code to swap out Bank 0 for Bank 1, you are actaully swapping NESASM Banks 0 and 1 for NESASM Banks 2 and 3.<br>
---------16kb Swappable BANK 0---------------<br>
NESASM3 BANK 0 = $8000-$9FFF = 8KB<br>
NESASM3 BANK 1 = $A000-$BFFF = 8KB<br>
---------16kb Swappable BANK 1---------------<br>
NESASM3 BANK 2 = $8000-$9FFF = 8KB<br>
NESASM3 BANK 3 = $A000-$BFFF = 8KB<br>
&#xA0;
				</div><div class="mdl-card--border"></div>