<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Sep 14, 2009 at 3:22:10 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I swear the sound engine is as big and complicated at the game itself <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif">
<br>some many things to handle. I&apos;m just trying to stick with the sound engine to learn how the sound truly works and to be able to have sfx and music at the same time.
<br>
<br>I can see why a lot of homebrew go the NSF player route. basically just have to tell a song to play. The bad thing with the nsf way is that the music engine is hidden. You have no idea what&apos;s going on to make the sound actually happen, and I don&apos;t think you have the versatility to play songs, and sfx at the same time. 
<br>
<br>Anyway, I went in and added my variable to handle which sfx to play, and added my sfx to the sound data file. so now the nerdy nights engine is running my sounds. Good thing I only had 2 different beeps at <img src="images/blank.gif" border="0" style="display: none;" original-src="i/expressions/face-icon-small-smile.gif">
<br>
<br>basically handle it like this. I initiate sound when the screen is loaded, then in my program when I wanted to call the sfx I wrote this
<br>
<br>LDA #$01
<br>STA sfx
<br>jsr sound_load
<br>
<br>or 
<br>
<br>LDA #$02
<br>STA sfx
<br>jsr sound_load
<br>
<br>I added a series of branches in the sound engine to check the sfx variable then load the corresponding data stream.
<br>
<br>I had to adjust the frame counter as checking every 8 frames was too slow. ended up making it 4. Now you said you are going to implement a new timing thing later, but for now, I was thinking another variable would work here. nae it something like &quot;time&quot; and add it to my call routine. something like this.
<br>
<br>LDA #$04
<br>STA time
<br>LDA #$01
<br>STA sfx
<br>jsr sound_load
<br>
<br>it should work well for sfx, but songs will probably change timings mid load and such, so I&apos;m looking forward to seeing how this will be handled.
				</div><div class="mdl-card--border"></div>