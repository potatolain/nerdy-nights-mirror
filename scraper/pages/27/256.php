<div class="mdl-card__title"><strong>Saintkat</strong> posted on 
		
			
				
				May 8, 2014 at 2:24:39 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Alright, another hard to ask question (the hard part being the wording, no clue if I am using byte correctly for example).
<br>
<br>After the color palettes for a level I am hacking, I get a bunch of attributes for the background.  In the hex editor, I&apos;ll see:
<br>
<br>... 23 E1 03 88 00 88 23 E9 ...
<br>
<br>Now $23E1 corresponds to one the 32x32 attribute areas on the background, 23E9 will be another one.
<br>
<br>The bytes 88 and 00 on the bit level would represent the color palettes used for each quarter of the 32x32 attribute area.
<br>
<br>So the only byte here I don&apos;t know what it does is the 03 byte.   The first 88 contains the attributes for the $23E1 attribute area and the 88 and 00 are for other attribute areas, so I assume that the 03 byte defines which attributes areas the 00 and second 88 palette attributes belong to (relative to 23E1)?
<br>
<br>Anyone able to point me in the direction of what makes up the byte immediately following the attribute area (the 03 in this case)?
<br>
<br>I obtained all my knowledge about all this from this article (for my reference really): <a href="http://badderhacksnet.ipage.com/badderhacks/index.php?option=com_content&amp;view=article&amp;id=270:the-nes-picture-processing-unit-ppu&amp;catid=14" target="_blank">http://badderhacksnet.ipage.com/b...</a>
				</div><div class="mdl-card--border"></div>