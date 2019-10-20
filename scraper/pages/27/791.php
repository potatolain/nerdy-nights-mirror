<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 17, 2016 at 10:28:19 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>hybrid</b></i><br>
&#xA0;
<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
Using Famitone as my sound engine (Thanks Shiru!) and having some issues with disabling and enabling channels. What I want to do is mute a couple of channels when I pause the game, so I put this in my main code:<br>
LDA #$05 ; turn off square 2 and triangle<br>
STA APU_SND_CHN ;$4015<br>
<br>
That part works perfect. However, when I try to re-enable all of the channels, there is sometimes a delay. It seems almost like it is waiting for the address to stop being busy before turning those bits back on. The delay varies in time. Sometimes there is no delay, sometimes a few seconds, sometimes less than a second. I use this in my main code to enable it:<br>
<br>
LDA #$0F ;turn on square 1, 2, triangle, and noise<br>
STA APU_SND_CHN<br>
<br>
Any thoughts! Thanks!</div>
<br>
<br>
what about adding #$0A to&#xA0;<span style="line-height: 20.8px;">APU_SND_CHN<br>
instead of loading a whole new value&#xA0;</span></div>
Great idea, hadn&apos;t tried that yet. But, it didn&apos;t work, same result.<br>
<br>
KHAN and I have also tried ORA %00001111 with the same result.<br>
<br>
I also tried skipping &apos;jsr FamiToneUpdate&apos; in the NMI for 1 frame to see if it routine just needed a quick break but that didn&apos;t work either.<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>