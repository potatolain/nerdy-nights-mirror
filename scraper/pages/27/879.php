<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Jan 13, 2017 at 3:39:21 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>SoleGooseProductions</b></i><br>
<br>
<strong>Kevin has another way of doing text boxes, swapping between nametables and such, but that is black magic to me.</strong><br>
&#xA0;</div>
<br>
Good call. I do this in Tailgate Party when I pause because i don&apos;t want to mess up the game screen in Nametable 0. It&apos;s actaully pretty easy. When you load Nametable 0, also load another unused table (if you are mirroring, there are only 2 usable nametables anyways) but have the second nametable have the background with the text box. When the time comes, just change the value in the Nametable High Byte variable you are using to keep track on what name table you are on and let the NMI change the nametable. You have 4 NametableHigh variable options will be:<br>
NAMETABLE0&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; = $00 ;$2000<br>
NAMETABLE1&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; = $01 ;$2400<br>
NAMETABLE2 &#xA0; &#xA0;&#xA0;&#xA0; = $02 ;$2800<br>
NAMETABLE3 &#xA0; &#xA0;&#xA0;&#xA0; = $03 ;$2C00<br>
<br>
In My Main Code:<br>
LDA #NAMETABLE1<br>
STA NametableHigh<br>
<br>
Then this is my NMI code:<br>
LDA #%10010000&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1<br>
ORA NametableHigh &#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;<br>
STA $2000<br>
<br>
That is just one example. There are probably a bunch of different ways you can use this with a text box.<br>
---------------------------<br>
Another way I thought of is check out Duck Tales 2 in an emulator. I think that game manipulates the background Pattern Table if I remember correctly.<br>
&#xA0;
				</div><div class="mdl-card--border"></div>