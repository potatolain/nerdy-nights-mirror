<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Jul 3, 2013 at 12:36:17 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>m308gunner</b></i><br>
	<br>
	So I&apos;ve been stumped by the Nerdy Nights example below for about a year now and I think I finally understand it. Is my example underneath the original accurate?</div>
Your example seems to be correct except for a small thing: the NES will not actually render the black color from color #4 of the palette, it will always use color #0 for the background color (i.e. when the 2 bits of the pattern table tile data are %00). In other words, if the final color index is 0, 4, 8 or 12, NES will always render with color #0.<br>
<br>
				</div><div class="mdl-card--border"></div>