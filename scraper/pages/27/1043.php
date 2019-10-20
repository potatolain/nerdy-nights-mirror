<div class="mdl-card__title"><strong>oleSchool</strong> posted on 
		
			
				
				Jul 18 at 2:26:14 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks to both of you, I appreciate different explanations as well. 
<br>
<br>I&apos;m a little concerned about the 32x30 vice 32x31 dilemma I&apos;m having in my code. When my background db rows have 32x31 rows defined, I get all visible rows filled up with tiles. When I do 32x30, the bottom row is full of other random tiles. 
<br>See my code on previous page.  Comment out line 254 so you only have 32x31 instead of 32x32 and when you compile it and open it up in the emulator you&apos;ll see all the rows have tiles. 
<br>
<br>So I am definitely getting what you&apos;re saying, that the 32x30 = 960 bytes and the attributes conveniently take 64 bytes to give us 1024 bytes (I&apos;m gonna add attributes into my Loadbackground tiles loop btw, great idea!). But I keep scratching my head because if I don&apos;t load 32x31 rows, then the bottom row (32) of my screen is filled with other tiles (probably selecting one based on hex value of the attributes binary value equivalent). 
<br>
<br>Anyway, any thoughts or do i have another bug =)
				</div><div class="mdl-card--border"></div>