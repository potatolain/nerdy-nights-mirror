<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				May 27, 2015 at 6:07:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>chowder</b></i><br>
	<br>
	I&apos;m back with more (hopefully not too annoying) questions!<br>
	<br>
	What&apos;s the best way to create big (as in fullscreen) images for cutscenes and the like? I&apos;ve been using Shiru&apos;s excellent NES Screen Tool to import BMPs as tiles, but piecing the image together from there is painful, to say the least. Once I&apos;ve removed dupe tiles, I&apos;m left with a big mess and it&apos;s really very hard to stitch it all back together manually.<br>
	<br>
	I&apos;ll look in to coding some kind of parsing tool to keep track of where the duplicates have been removed from or something like that unless anyone has any better ideas.<br>
	<br>
	Thanks,<br>
	Rob.</div>
<br>
Here&apos;s my technique. Draw the image in TileMolestor/YYCHR/TLP/etc., then weed out all repeating tiles. Put all single tiles in your game&apos;s CHR. After that, make an infinite loop in your program so it stays on one screen. Load said program in FCEUX, and open up your Hex Editor, go under PPU memory and go to the screen memory (starting at $2000, then all the mirroring and blah blah blah). There, you can build your screen and see how it looks directly on the emulator, which is really good. Once your screen is build, paste your screen onto a HEX editor and start compressing it (I use RLE compression, do something like $FE,$69,$13 where FE corresponds to the RLE &quot;call&quot; (i.e. let the routine know you&apos;re compressing), and have tile 69 repeated 13 times). Save the compressed data onto a .bin file and put it in your program.<br>
<br>
I hope I was clear enough. It may sound like it at first but trust me, it ain&apos;t rocket science when you get used to it <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>