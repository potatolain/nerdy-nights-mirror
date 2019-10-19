<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Sep 14, 2009 at 1:08:59 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					well, I have the skeleton sound engine in my game now. The sound_play_frame works fine in my NMI. It doesn&apos;t interfere with anything that I can see. I have it play the scale when the game comes on and I can still use the controller buttons, so this works better than what I had tried before.
<br>
<br>I set the sound engine to disable when I select something. My plan being I can re-enable and load a different scale when the next screen comes up. we&apos;ll see.
<br>
<br>I was looking at the sound engine code itself, and thinking of making a variable to control looping. Like if gamestate is still the same, then loop. kinda treating the scale as a song. 
<br>
<br>Probably thinking ahead a bit here, but I was trying to see how to have a song play and still have soundfx. since sound fx will use the same channel as a song, I need to come up with a way to still progress the song data, but mute it and load the sound fx, and then return to the song when the soundfx is done.
<br>
<br>Still playing with this a bit, looking at what of things may be useful as a variable. maybe a tempo variable, to handle the CMP frame. 
<br>
<br>I assume that future tutorial will add the other channels in. I have someone who did music for me. The songs are done with a tracker program though and in NSF, so I&apos;m thinking they may need to be re-written to work in this engine. I&apos;d use the NSF player route, but I don&apos;t know how I&apos;d do that and still be able to use soundfx. 
<br>
				</div><div class="mdl-card--border"></div>