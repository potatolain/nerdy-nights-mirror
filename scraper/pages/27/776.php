<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				May 4, 2016 at 3:54:55 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>thefox</b></i><br>
<br>
Yeah, the problem is very likely to be due to overrunning the vblank time.</div>
<br>
This. I&apos;d suggest buffering the scores during rendering time and then copy the buffer to the BG during vblank<br>
This article is the best regarding vblank stuff:&#xA0;<a href="http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs" target="_blank" original-href="http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs">http://wiki.nesdev.com/w/index.ph...</a>
				</div><div class="mdl-card--border"></div>