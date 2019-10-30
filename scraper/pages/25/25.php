<div class="mdl-card__title"><strong>GreenMonkey</strong> posted on 
		
			
				
				May 22, 2015 at 4:25:14 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Alright so the errors were my own fault. I&apos;ve corrected them but the game seems to freeze upon reading
<br>
<br>     .Sprite0_testtwo
<br>	     bit $2002
<br>	     bvc .Sprite0_testtwo
<br>
<br>I can&apos;t move the screen, the level loads but the first tile in the metatile isn&apos;t displayed, and random garbage keeps going into the stack.
<br>
<br>I re-wrote the engine so that it was formatted in a way I like. I&apos;ve thoroughly compared my code to the original code several times and I didn&apos;t find any mistakes on my part so I&apos;m either doing something wrong with the sprite0hit, or the offscreen_buffer_tables.i needs to be changed. If someone could help me, I&apos;d greatly appreciate it. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>