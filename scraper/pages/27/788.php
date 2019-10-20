<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 14, 2016 at 1:35:08 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Using Famitone as my sound engine (Thanks Shiru!) and having some issues with disabling and enabling channels. What I want to do is mute a couple of channels when I pause the game, so I put this in my main code:
<br>LDA  #$05     ; turn off square 2 and triangle
<br>STA APU_SND_CHN   ;$4015
<br>
<br>That part works perfect. However, when I try to re-enable all of the channels, there is sometimes a delay. It seems almost like it is waiting for the address to stop being busy before turning those bits back on. The delay varies in time. Sometimes there is no delay, sometimes a few seconds, sometimes less than a second. I use this in my main code to enable it:
<br>
<br>LDA  #$0F  ;turn on square 1, 2, triangle, and noise
<br>STA APU_SND_CHN
<br>
<br>Any thoughts! Thanks!
				</div><div class="mdl-card--border"></div>