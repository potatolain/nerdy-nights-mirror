<div class="mdl-card__title"><strong>thefox</strong> posted on 
		
			
				
				Sep 3, 2011 at 8:58:06 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>derekb</b></i><br><br>I&apos;m having a trouble doing palette cycling and was wondering if anyone could help, when I change a palette color my entire background winds up pushing itself down for some reason, my lil code snip is&#xA0;</div><br><b>Always</b> at the end of vblank, after all PPU updates (but still in vblank) remember to set the scroll using $2005 <b>*and*</b> $2000.<br><br>
<div>Something like this should be enough if you just want to scroll to the upper left corner (of course you can change the $2000 flags depending on your needs):</div><div><br></div><div>lda #%10001000</div><div>sta $2000</div><div>lda #0</div><div>sta $2005</div><div>sta $2005</div><div><br></div>
				</div><div class="mdl-card--border"></div>