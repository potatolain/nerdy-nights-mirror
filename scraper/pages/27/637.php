<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 27, 2015 at 5:45:52 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Here you are:<br>
<br>
CheckPaddleCollision:<br>
&#xA0; LDA ballx ;;check if ball hasn&apos;t yet reached paddle on x axis<br>
&#xA0; SEC<br>
&#xA0; SBC #$08<br>
&#xA0; CMP #PADDLE1X<br>
&#xA0; BCS CheckPaddleCollisionDone<br>
<br>
&#xA0; LDA paddle1ytop ;; check if ball is above top of paddle<br>
&#xA0; CMP bally<br>
&#xA0; BCS CheckPaddleCollisionDone<br>
<br>
&#xA0; LDA paddle1ytop ;; check if ball is below bottom of paddle<br>
&#xA0; CLC<br>
&#xA0; ADC #$10<br>
&#xA0; CMP bally<br>
&#xA0; BCC CheckPaddleCollisionDone<br>
<br>
&#xA0; LDA #$01 ;; bounce, ball now moving right<br>
&#xA0; STA ballright<br>
&#xA0; LDA #$00<br>
&#xA0; STA ballleft<br>
CheckPaddleCollisionDone:
				</div><div class="mdl-card--border"></div>