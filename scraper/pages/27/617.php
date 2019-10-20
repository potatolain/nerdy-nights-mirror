<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jul 18, 2015 at 2:18:38 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>MrFaust</b></i><br>
<br>
<strong>[1] I managed to figure out how to use the assemblers after some digging</strong>, thanks though for the heads up Bunnyboy.<br>
<br>
As for the nerdy nights tutorials they do lay it all out for you. <strong>[2] The problem I am having is I don&apos;t know where to start</strong>. I follow along and type the example code out in the order it is given and then as I am trying to understand the reasoning behind it but it just doesn&apos;t make sense besides that first bit of code at the beginning of every game and the banks (sort of). Either way I feel that with no coding know how something like this is just too big and complex. I am going to at least give it a couple of weeks of reading the tutorials and typing the code and hoping i manage to pick up some of the logic behind it. Who knows maybe it will magically click in my head but in all honestly computer language is complex an with out schooling or understanding of the basics its going to be rough. I am going to try and devote an hour or two each day to those tutorials and see where it takes me. Anyhow wish me luck, ill post an update or something maybe after a week or so messing with this stuff.<br>
<br>
Maybe there is a book or something with step by step instruction of making a stupid simple game. I gather once I understand how it fits together and the math of the whole thing it&apos;d be easier to explore and learn more complex coding. I&apos;ll keep an eye out on the interwebs too.</div>
<strong>[1]</strong> you are smarter than I am, I ended up writing my own assembler... <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
<strong>[2]</strong> My silly advice for your own project besides following Nerdy Nights examples:<br>
1. program a black screen doing nothing<br>
2. same as above, plus place a single sprite in the center of the screen<br>
3. same as above, plus check each NMI (V-Blank) if UP is pressed<br>
4. same as above, plus if UP is pressed move the sprite up 1px in the next NMI (V-Blank)<br>
5. same as above, but do the same for DOWN (move 1px down), RIGHT (move 1px right), LEFT (move 1px left)<br>
6. add a static background loading at startup or when RESET is pressed<br>
and so on...<br>
<br>
However, if you get to #6, you have all the needed basics to make a game. It will take a while.<br>
<br>
Also, I&apos;m not a pro, so take my advice with caution, there are likely better approaches.<br>
<br>
Again, good luck! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>