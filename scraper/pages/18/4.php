<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Sep 14, 2009 at 9:25:23 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>udisi</b></i><br><br>well, I have the skeleton sound engine in my game now. The sound_play_frame works fine in my NMI. It doesn&apos;t interfere with anything that I can see. I have it play the scale when the game comes on and I can still use the controller buttons, so this works better than what I had tried before.
<br><br>I set the sound engine to disable when I select something. My plan being I can re-enable and load a different scale when the next screen comes up. we&apos;ll see.
<br>
<br>I was looking at the sound engine code itself, and thinking of making a variable to control looping. Like if gamestate is still the same, then loop. kinda treating the scale as a song. 
<br>
<br>Probably thinking ahead a bit here, but I was trying to see how to have a song play and still have soundfx. since sound fx will use the same channel as a song, I need to come up with a way to still progress the song data, but mute it and load the sound fx, and then return to the song when the soundfx is done.
<br>
<br>Still playing with this a bit, looking at what of things may be useful as a variable. maybe a tempo variable, to handle the CMP frame. 
<br>
<br>I assume that future tutorial will add the other channels in. I have someone who did music for me. The songs are done with a tracker program though and in NSF, so I&apos;m thinking they may need to be re-written to work in this engine. I&apos;d use the NSF player route, but I don&apos;t know how I&apos;d do that and still be able to use soundfx. 
<br></div><br>Glad the the engine is working with your game.&#xA0; Good comments too.&#xA0; You already forsee some of the complications we&apos;ll run into.&#xA0; Some responses to your comments:<br><br>1) You likely won&apos;t ever need to disable the sound engine.&#xA0; Sound effects will terminate on their own when they finish playing.&#xA0; For forever-looping songs you&apos;ll be able to switch to a new song whenever you want.&#xA0; If for some reason you&apos;d want no song to play, you could have a &quot;silence song&quot; that will hush up the music channels.<br><br>2) We&apos;ll get to looping in a future lesson, but the way we&apos;ll do it is by having an opcode in the music data that will tell the sound engine to jump back to an earlier part in the data stream.&#xA0; <br><br>3) Dealing with channel conflicts between music and sfx is very important.&#xA0; I&apos;m going to talk about it a bit in the next lesson (which is almost finished).&#xA0; The way we&apos;ll handle it is to have the music and sfx both running their streams in RAM, but when it comes time to write to the APU regs we&apos;ll make sure the sfx data gets written instead of the music.<br><br>4) The simple frame counter that we have in the skeleton sound engine isn&apos;t what we will use in the end.&#xA0; It has a lot of problems, the biggest one being that it doesn&apos; let us have variable note lengths (8th note vs. quarter note).&#xA0; Timing, note lengths and tempo will be the topics covered in the the lesson after the next one.<br><br>5) Yes, future tutorials will add the other channels in.&#xA0; The next lesson will let us make basic little songs that play on all three tonal channels (Sq1, Sq2, Tri).&#xA0; The next 3 lessons are the really big ones.&#xA0; This is the tentative syllabus:<br><br>Part 5 - Pointer tables, playing on multiple channels at once, music/sfx channel conflicts<br>Part 6 - Timing, note length and tempo, buffering APU writes (maybe?), rests?<br>Part 7 - Opcodes, RTS Trick, Looping<br>Part 8 - Volume Envelopes, Transposing<br>Part 9 - Noise channel?<br>Part 10+ - other bells and whistles<br><br>6) You will have to convert the songs in your NSF to fit the music format of our sound engine.&#xA0; It&apos;s unavoidable.&#xA0; On the NES, every game has a different sound engine with a different format for its sound data.&#xA0; NSF files for game music actually include the game&apos;s sound engine in the file.&#xA0; But as long as you know the notes, note lengths and effects, it should be pretty easy to convert.<br><br><br>
				</div><div class="mdl-card--border"></div>