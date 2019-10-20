<div class="mdl-card__title"><strong>pk space jam</strong> posted on 
		
			
				
				Nov 10, 2017 at 9:03:32 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					heres what I have now, still getting no result <span class="sprites_emoticons absmiddle" id="emo_sad">&#xA0;</span><br>
<br>
CheckPaddleCollision:<br>
&#xA0;&#xA0;<br>
&#xA0; LDA ballx<br>
&#xA0; CMP PADDLE1X<br>
&#xA0; BCC .End<br>
&#xA0; LDA bally<br>
&#xA0; CMP paddle1ytop<br>
&#xA0; BCC .End<br>
&#xA0; LDA bally<br>
&#xA0; CMP paddle2ybot<br>
&#xA0; BCS .End<br>
&#xA0; LDA #$00<br>
&#xA0; STA ballright<br>
&#xA0; LDA #$01<br>
&#xA0; STA ballleft&#xA0; &#xA0; ;bounce, ball moving left<br>
&#xA0; .End:<br>
&#xA0; &#xA0; RTS<br>
<br>
UpdateSprites:<br>
LDA bally ;;update all ball sprite info<br>
STA $0320<br>
LDA #$12<br>
STA $0321<br>
LDA #$00<br>
STA $0322<br>
LDA ballx<br>
STA $0323 ;end of ball sprite info<br>
<br>
STA paddle1ytop<br>
LDA $0300<br>
LDA #$00<br>
STA $0301<br>
LDA #$00<br>
STA $0302<br>
LDA #PADDLE1X<br>
STA $0303<br>
<br>
STA paddle2ybot<br>
LDA $0324<br>
LDA #$31<br>
STA $0325<br>
LDA #$00<br>
STA $0326<br>
LDA #PADDLE2X<br>
STA $0327<br>
<br>
RTS
				</div><div class="mdl-card--border"></div>