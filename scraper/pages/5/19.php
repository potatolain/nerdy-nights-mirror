<div class="mdl-card__title"><strong>resynthesize</strong> posted on 
		
			
				
				Oct 26, 2009 at 4:28:36 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hi, <br><br>I was able to modify the code to update all four sprites that comprised mario at the same time.&#xA0; However, when I try to generalize the update with a loop, it doesn&apos;t work.&#xA0; Here is the code I came up with:<br><br><br><br><br><code>
ReadRight:<br>&#xA0; lda $4016&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; player 1 - A<br>&#xA0; and #%00000001&#xA0;&#xA0;&#xA0;&#xA0; ; only look at bit 0<br>&#xA0; beq ReadRightDone <br>&#xA0; ldx #$03&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; x position of sprite starts at $0203 <br><br>moveloop:<br>&#xA0; lda $2000, x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; load sprite X position ($2000 + x)<br>&#xA0; clc&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; make sure the carry flag is clear<br>&#xA0; adc #$02&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; A = A + 1<br>&#xA0; sta $2000, x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; save sprite X position<br>&#xA0; inx&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; increment X 4 times to get to next sprite<br>&#xA0; inx&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; x position<br>&#xA0; inx<br>&#xA0; inx<br>&#xA0; cpx #$0F&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; if x = $0f, all 4 sprites have been moved<br>&#xA0; bne moveloop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; otherwise keep going.<br><br>ReadRightDone:<br><br></code>I think the problem may be in my understanding of lda/sta.  When I debug the code, the accumulator has a value of 0 after the &quot;lda $2000, x&quot; statement.  If I use four sequential lda/sta blocks with the sprite offset hardcoded, it works fine and the accumulator contains the correct x position or the sprite.  Any ideas where I am going wrong? <br><br><br><br>As an aside, is there a better way to add 4 to X than doing the four INX statements?  It appears ADC only operates on the accumulator.
				</div><div class="mdl-card--border"></div>