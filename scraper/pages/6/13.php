<div class="mdl-card__title"><strong>albailey</strong> posted on 
		
			
				
				Jul 8, 2008 at 12:26:53 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The thing about loading the entire nametable (1024 bytes =   32x30 for the tiles, plus 64 for the entire OAM attributes) is that the X counter you are using can only go up to 256.  So how do you load in the 257th byte?
<br>The answer is to use a slightly more complicated syntax for the addressing mode.   I suspect bunnyboy has covered this (or is planning to) in one of his tutorials.
<br>
<br>If he hasnt, or you dont want to wait, you need to clone the LoadBackground method and give it different starting points, and make additional data tables (backgroundX<img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif"> and load each of those in 256 (or less) sized chunks.
<br>
<br>You should be able to leave the attribute stuff alone since its 64 bytes max.
<br>
<br>
<br>Al
<br>
<br>Al
				</div><div class="mdl-card--border"></div>