<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Apr 21, 2014 at 3:26:09 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Mega Mario Man</b></i><br>
	<br>
	I pasted a lot of code, so I just did a pastebin.<br>
	<br>
	Here is the issue, when I run this code in the ENGINETITLE section:<br>
	&#xA0; LDA #$01<br>
	&#xA0; STA ChangeColor&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Flag to tell the system to run UpdateColor Subroutine in the NMI section (00=Skip ColorUpdate, 01=Run ColorUpdate)<br>
	&#xA0; LDA #$29&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
	&#xA0; STA attribute_RAM&#xA0;&#xA0;&#xA0;&#xA0; ;Color to change to $29<br>
	<br>
	My background goes to all zeros. If I take it out, the background loads just fine, but I my color won&apos;t go back to color $29.<br>
	<br>
	Basically, I am changing 1 color of the palette duing game play, specifically address #3F11, and I want to reset it to the default value for the Title Screen. In trying to do so, it breaks my LoadBackround Routine and I get all Zeros. The wierd thing is, the background should be loaded well before this point hits. I cannot for the life of me figure out what I am doing wrong.<br>
	<br>
	I have added a pastebin of the relevant code to the 3 process (Color Change, Switching Gamestates, and Loading Backgrounds). I do run the ColorUpdate Subroutine during gameplay to update some colors when the D-Pad is pressed and everything works fine there. It&apos;s only at the Title Screen where it breaks it.<br>
	<br>
	<a href="http://pastebin.com/Z785aqBB" target="_blank">http://pastebin.com/Z785aqBB</a><br>
	<br>
	Thanks! Hope this makes sense.</div>
<br>
I guess you took out a lot of code to simplify things for us, but it looks like the palette update is running nonstop at the title screen.&#xA0; Is there other code that only allows that flag to be set at a certain event?<br>
<br>
I would try setting those two variables to their respective values as you&apos;re changing the gamestate back to the title, and not when it&apos;s actually already in the title gamestate.<br>
<br>
				</div><div class="mdl-card--border"></div>