<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Feb 12, 2014 at 8:26:33 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Note! That prng you found is probably intended for a machine that loads a program into RAM, as it DOES use .byte to spit out a value into what appears to be treated as RAM, in that routine. On the NES, you may want to adapt this by doing:<br>
<br>
random: .res 2<br>
<br>
and then have an init routine that fills &quot;random&quot; with an initial seed value.<br>
<br>
I skimmed over a lot there---there&apos;s a lot of details other tutorials and folks here can help fill in. Hopefully something in there helped a bit, though.
				</div><div class="mdl-card--border"></div>