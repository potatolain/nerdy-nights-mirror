<div class="mdl-card__title"><strong>Cowpar2</strong> posted on 
		
			
				
				Sep 4, 2013 at 10:47:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Ok, I&apos;m still not exactly sure what I&apos;m doing, but &quot;JSR Drawscore&quot; is already in the NMI.
<br>So if I add the following into the code (after &quot;UpdateSprites&quot;), it DOES make the score appear, but ONLY in the top left-hand corner:
<br>
<br>DrawScore:
<br>  LDA $2002 ;read PPU to reset the latch
<br>  LDA #$20
<br>  STA $2006 ;set the high part
<br>  LDA #$20
<br>  STA $2006 ;then the low part
<br>  LDA score1
<br>  STA $2007 ;store the score (after 15 it will start to do letters)
<br>  RTS
<br>
<br>If I change the low part of the latch to anything past #$40 it will mess with the screen, but anything less then #$20 the score doesn&apos;t even appear.
<br>How do I get it to appear, say, 16 px down and all the way to the right?
				</div><div class="mdl-card--border"></div>