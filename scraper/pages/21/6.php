<div class="mdl-card__title"><strong>zi</strong> posted on 
		
			
				
				Jun 6, 2015 at 3:47:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					and hello from the future!
<br>
<br>I&apos;ve searched and searched, but no soundop for changing tempo on the fly so I made one!
<br>
<br>
<br>se_op_set_tempo:
<br>    lda [sound_ptr], y      ;read the argument
<br>    sta stream_tempo, x        ;store it in our tempo variable
<br>    lda #$00
<br>    rts
<br>
<br>it works! granted, it was easy, almost too easy, I just ripped off the volume env change. but, BUT, this is sloppy slap-dash work and I want the opinion of the programmers to evaluate and crush any potential mistakes. 
<br>
<br>thanks!
				</div><div class="mdl-card--border"></div>