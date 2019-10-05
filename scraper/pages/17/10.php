<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Oct 25, 2009 at 5:57:57 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>udisi</b></i><br><br>I&apos;ve tried that. I didn&apos;t do that initially cause I didn&apos;t want the music to start upon startup. you can load the song and use the initialization function to play when you want it to start. 
<br>
<br>I actually use the initialization and disable functions throughout. If I have a screen without music, I want to disable, otherwise the song from the previous page will continue to play on the new page.</div><br><br>Music won&apos;t play on startup if you don&apos;t load a song, so you don&apos;t have to worry about that anymore.&#xA0; The intended usage of the engine is this:<br><br>1) call sound_init on startup (in reset)<br>2) when you want to play a song or sound effect, call sound_load<br>3) when you want the engine to be quiet (like when changing states/screens), play the silence song (see song0.i included in tempo.zip)<br><br>You shouldn&apos;t be using sound_disable/sound_init to silence and restart the engine like that.&#xA0; Everything should be done through sound_load.&#xA0; You&apos;ll save on ROM space this way (fewer JSRs) and you&apos;ll have perfect control of when a song/sfx starts and finishes.<br>
				</div><div class="mdl-card--border"></div>