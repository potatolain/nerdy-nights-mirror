<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Nov 2, 2016 at 4:06:40 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					first problem I see is that in your .fall subroutine, right after the call to updateLoc you call BEQ:
<br>
<br>...
<br>.fall
<br>  LDA spriteRAM
<br>  CLC
<br>  ADC jump
<br>  STA spriteRAM
<br>  JSR updateLoc  
<br>  CMP #BOTTOMWALL
<br>  BEQ .out
<br>...
<br>
<br>if I&apos;ve got my facs straight here, the last thing loaded into the accumulator is spriteRAM+32, but with #$08 added to it. I don&apos;t see why it would be working regardless, but since that last sprite is what I assume to be the player 2 paddle, that might be a good place to start. load up the correct ram there and you should be good to go. 
<br>
<br>additionally, I&apos;d probably split your updateLoc routine into paddles and character- would save a lot of NMI time to not call to change those paddles again
				</div><div class="mdl-card--border"></div>