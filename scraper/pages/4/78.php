<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 30, 2014 at 12:59:13 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dredster</b></i><br>
	<br>
	<div class="FTQUOTE">
		<br>
		I hope this helps a little, but I&apos;m not too sure this is what you asked for.</div>
	<br>
	You and Khan helped a little. I was trying to change the colors in the directive .db. So, they have to have that first transparent color ? Why do they all have to have that ? I&apos;m still not understanding what is meant by high byte and low byte. What is their signifigance and why do you have to set them to a pallete value ?&#xA0; Looking forward to Swords and Ruins as I do every homebrew. Will it be released on here, Inifite NES lives or RetroUSB ?</div>
<br>
<em>So, they have to have that first transparent color ?</em><br>
Yes.<br>
<br>
<em>Why do they all have to have that ?</em><br>
It is the way the NES handles transparency. Someone more tech-oriented can be more precise about it.<br>
<br>
<em>I&apos;m still not understanding what is meant by high byte and low byte. What is their signifigance and why do you have to set them to a pallete value ?</em><br>
<br>
Each colors in the palette is a <u>single </u>byte. Hi/Lo is for addresses and pointers.<br>
But you can just set a &quot;dataline&quot; of 16 hex values and load it up as your palette.<br>
Just remember: #0,#4,#8,#12, i.e. the first byte (i.e. color) of each sub-palette, is transparent.<br>
<br>
<em>Will it be released on here, Inifite NES lives or RetroUSB ?</em><br>
I don&apos;t handle the release, just the coding. Updates, when available, will be in the S&amp;R thread.<br>
I fear this is not the correct thread to discuss about it, and that discussing it further would be considered spam in here.<br>
I posted that image just to (try to) explain a concept about sprites palettes.<br>
<br>
<em>You and Khan helped a little.</em><br>
I hope this helped a little more! <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>