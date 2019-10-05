<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Aug 26, 2017 at 12:58:20 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>brilliancenp</b></i><br><br>Oh wait!  Do you set it up using the .db command?  Im going to try that</div><br><br><br><br><br>No. You would section off a part of ram. Such as:<br><br>
BufferRAM           .rs 64     <br><br>
That would reserve 64 bytes in ram just for buffering. I have never done it, but you could adjust that number according to what is needed thr most in any given frame in the game.
				</div><div class="mdl-card--border"></div>