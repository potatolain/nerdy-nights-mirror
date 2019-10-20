<div class="mdl-card__title"><strong>pk space jam</strong> posted on 
		
			
				
				Nov 10, 2017 at 1:11:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Another question, trying to follow Nerdy Nights 7 and implement collision with the paddles, I got the walls working, but what am I doing wrong here? If someone could breakdown the logic bunny boy is using for this I would really appreciate it, 
<br>
<br>CheckPaddleCollision:
<br>  LDA $0300
<br>  STA paddle1ytop
<br>  LDA $031C
<br>  STA paddle2ybot
<br>
<br>  LDA ballx
<br>  CMP #PADDLE1X
<br>  BCS .End
<br>  LDA bally
<br>  CMP #paddle1ytop
<br>  BCC .End
<br>  LDA bally
<br>  CMP #paddle2ybot
<br>  BCS .End
<br>
<br>  LDA ballx
<br>  CMP #RIGHTWALL
<br>  BCC .End
<br>  LDA #$00
<br>  STA ballright
<br>  LDA #$01
<br>  STA ballleft    ;bounce, ball moving left, below here give point to p1, reset ball
<br>  .End:
<br>    RTS
				</div><div class="mdl-card--border"></div>