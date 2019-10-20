<div class="mdl-card__title"><strong>Shiru</strong> posted on 
		
			
				
				May 19, 2016 at 11:57:02 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					There is FamiToneMusicPause routine. You can either just use it, or take a look how to do this properly.<br>
<br>
If you want to mute music channels but not stop music, it is not supported in the engine as is. It shouldn&apos;t be done via $4015, but with preventing writing the volume output into corresponding registers in the FamiToneUpdate, sending zero volume instead. I.e. the parts of the code like this:<br>
<br>
@ch1prev:<br>
lda FT_CH1_VOLUME<br>
@ch1cut:<br>
ora FT_CH1_DUTY<br>
sta FT_MR_PULSE1_V<br>
<br>
need to get additional condition to do lda #0 instead of lda FT_CH1_VOLUME when a channel is muted.
				</div><div class="mdl-card--border"></div>