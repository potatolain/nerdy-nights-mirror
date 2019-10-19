<div class="mdl-card__title"><strong>MetalSlime</strong> posted on 
		
			
				
				Sep 15, 2009 at 9:40:49 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Yes a sound engine is pretty complicated, which I guess is the reason there aren&apos;t any tutorials for making one yet.
<br>
<br>I&apos;ve never actually used the FamiTracker engine in a game, but I&apos;ve heard that it doesn&apos;t have sfx support.  Writing my own sound engine has been more fun anyway <img src="i/expressions/face-icon-small-smile.gif" border="0" style="display: none;">
<br>
<br>Glad to see you are playing around with the engine and coming up with solutions to select a sound and a speed.  One thing you can do to save some bytes is to put the stores inside the sound_load routine:
<br>
<br>    ldy #$04 ;time
<br>    lda #$01 ;sfx number
<br>    jsr sound_load
<br>
<br>;...
<br>sound_load:
<br>    sty time
<br>    sta sfx
<br>    ; do other load stuff
<br>
<br>Having the subroutine take parameters in A and Y and do the stores itself will save you the trouble of having to manually store them everytime.
<br>
<br>I finished up Part 5 today.  Will post it tonight (Japan time).  It&apos;s the toughest one so far, but it teaches some really important techniques.
				</div><div class="mdl-card--border"></div>