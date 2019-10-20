<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Nov 8, 2017 at 10:37:47 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>pk space jam</b></i><br>
<br>
I think I understand? Though what I&apos;m still confused about is why I would be getting the same error about sleeping being an unkown operand, here&apos;s my current code where I attempt to place the engine inside the loop&#xA0; (wait sent the wrong one)&#xA0;<br>
<br>
<a href="https://hastebin.com/goqexagoyo.pl" target="_blank" original-href="https://hastebin.com/goqexagoyo.pl">https://hastebin.com/goqexagoyo.pl</a><br>
<br>
update: yeah no matter what I try, I keep gettin an error saying that sleeping is an undefined symbol in operand field <span class="sprites_emoticons absmiddle" id="emo_sad">&#xA0;</span></div>
<br>
put sleeping in your variables.<br>
<br>
sleeping&#xA0;&#xA0;&#xA0; .rs 1<br>
&#xA0;</div>
Also, move lines 198 - 539 to after RTI or you can put that in bank 0 or bank 1. Where it is at now, all of that will try to run before the forever loop. These are your subroutines that are called from within your Game Engine inside of your Forever loop.<br>
&#xA0;<br>
&#xA0;
				</div><div class="mdl-card--border"></div>