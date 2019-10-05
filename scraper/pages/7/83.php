<div class="mdl-card__title"><strong>muffins</strong> posted on 
		
			
				
				Feb 9, 2012 at 1:14:09 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Having some difficulty understanding why this collision code doesn&apos;t work:<br>
<br>
CheckPaddle1Collision:<br>
&#xA0; ;;if ball x &lt; paddle1x<br>
&#xA0; LDA ballx<br>
&#xA0; CMP #PADDLE1X<br>
&#xA0; BCS CheckPaddle1CollisionDone<br>
&#xA0; ;;&#xA0; if ball y &gt; paddle y top<br>
&#xA0; LDA bally<br>
&#xA0; CMP paddle1ytop<br>
&#xA0; BCC CheckPaddle1CollisionDone<br>
&#xA0; ;;&#xA0;&#xA0;&#xA0; if ball y &lt; paddle y bottom<br>
&#xA0; LDA bally<br>
&#xA0; CMP paddle1ybot<br>
&#xA0; BCS CheckPaddle1CollisionDone<br>
&#xA0; ;;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; bounce, ball now moving right<br>
&#xA0; LDA #$01<br>
&#xA0; STA ballright<br>
&#xA0; LDA #$00<br>
&#xA0; STA ballleft<br>
CheckPaddle1CollisionDone:
				</div><div class="mdl-card--border"></div>