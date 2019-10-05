<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Feb 9, 2012 at 2:23:40 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>muffins</b></i><br>
	<br>
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
	CheckPaddle1CollisionDone:</div>
Try doing one pixel more/less and see.&#xA0; Sometimes that seems to work for me. <span class="sprites_emoticons absmiddle" id="emo_smile"></span> (if this doesn&apos;t work, pretend I didn&apos;t suggest it.<br>
<br>
CheckPaddle1Collision:<br>
&#xA0; ;;if ball x &lt; paddle1x<br>
&#xA0; LDA ballx<br>
&#xA0; CLC<br>
&#xA0; ADC #$01<br>
&#xA0; CMP #PADDLE1X<br>
&#xA0; BCS CheckPaddle1CollisionDone<br>
&#xA0; ;;&#xA0; if ball y &gt; paddle y top<br>
&#xA0; LDA bally<br>
&#xA0; SEC<br>
&#xA0; SBC #$01<br>
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
CheckPaddle1CollisionDone:<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>