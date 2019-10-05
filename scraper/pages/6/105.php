<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Apr 22, 2015 at 11:04:18 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					^___ I&apos;m not too sure I understood you question, and my English is rather poor; however I try (@all if my answer is not good, just correct it with the correct answer, there is no need to mock me, I&apos;m just trying to help):
<br>
<br>- if you will make a background of 16x16px areas (ie. 2x2 tiles) then you might be interested in the MRN article on metatiles, look for it in the sticky thread of The Brewery.
<br>
<br>- I don&apos;t think the tool you ask for exists (by the way: IMO jpg would definitely be a wrong format, since it is not loseless compression: bmp, gif or png would be definitely more correct), but Shiru made a tool you can found in NESDev forum (I think it must be a great tool, but I have hard time to fully understand how it work exactly, so I basically used it once to see how many tiles a third party image which was given to me to include in a game would take, and I used something like Tile Layer Pro to actually import the image in the CHR).
<br>
<br>- If you make the background of 8x8px areas, this is a way you can do it without using other tools: make a big data table of the background on your file to load, like:
<br>
<br>00 00 00 00 00 00 00 00 00 00 00 ...
<br>
<br>long 32 tiles repeated x 30 lines. This are the 960 Bytes to load your background. Then you edit it tile by tile, or row by row, reassemble the code, and verify in an emulator that it looks correct so far; you can take screen shots of the previous &quot;version&quot;, to help you editing the file for the next version. It is quickly boring and highly time consuming, however, it works I guess.
<br>
<br>Again, I&apos;m not even sure I understood the question. I&apos;m confident other members will provide you better feedback.
<br>
<br>Cheers! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>