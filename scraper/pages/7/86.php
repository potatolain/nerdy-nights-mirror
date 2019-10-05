<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Feb 9, 2012 at 11:00:41 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Thanks guys! KHAN, I ended up tweaking your suggestion a bit and it worked. Due to the sprite&apos;s width I used 8 pixels instead of one. Also had to swap the additions with subtractions. Here&apos;s the final code which works perfectly:<br>
<br>
CheckPaddle1Collision:<br>
&#xA0; ;;if ball x &lt; paddle1x<br>
&#xA0; LDA ballx<br>
&#xA0; SEC<br>
&#xA0; SBC #$08<br>
&#xA0; CMP #PADDLE1X<br>
&#xA0; BCS CheckPaddle1CollisionDone<br>
&#xA0; ;;&#xA0; if ball y &gt; paddle y top<br>
&#xA0; LDA bally<br>
&#xA0; CLC<br>
&#xA0; ADC #$08<br>
&#xA0; CMP paddle1ytop<br>
&#xA0; BCC CheckPaddle1CollisionDone<br>
&#xA0; ;;&#xA0;&#xA0;&#xA0; if ball y &lt; paddle y bottom<br>
&#xA0; LDA bally<br>
&#xA0; SEC<br>
&#xA0; SBC #$08<br>
&#xA0; CMP paddle1ybot<br>
&#xA0; BCS CheckPaddle1CollisionDone<br>
&#xA0; ;;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; bounce, ball now moving right<br>
&#xA0; LDA #$01<br>
&#xA0; STA ballright<br>
&#xA0; LDA #$00<br>
&#xA0; STA ballleft<br>
CheckPaddle1CollisionDone:
				</div><div class="mdl-card--border"></div>