<div class="mdl-card__title"><strong>DoNotWant</strong> posted on 
		
			
				
				Feb 9, 2012 at 5:48:05 AM 
			
			
			
			
		
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
This is what I have at the moment, kinda buggy, but still my best attempt yet.&lt;br&gt;<br>
Player1Collisions:&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;LDA player1 ; paddle1 y position&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;CLC&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;ADC #$10 ; 2 sprites for every paddle, so add 16&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;STA ballCollY ; bottom of paddle &lt;br&gt;&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0;&#xA0; &#xA0;LDA player1&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;CMP ballPos+1 ; ball y position&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;BCS .return&lt;br&gt;&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;<br>
&#xA0;&#xA0; &#xA0;LDA ballCollY&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;CMP ballPos+1&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;BCC .return&lt;br&gt;&lt;br&gt;<br>
<br>
&#xA0;&#xA0; &#xA0;LDA player1+3 ; paddle 1 x position&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;CMP ballPos ; ball x position&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;BCC .return&lt;br&gt;&lt;br&gt;<br>
<br>
&#xA0;&#xA0; &#xA0;LDA&#xA0; #$01&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;STA ballDirection+1 ; bD = up, bD+1 = down, bD+2 = left, bD+3 = right, 1 is off, 0 is on&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;STA ballDirection+2&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;LDA #$00&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;STA ballDirection&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;STA ballDirection+3&lt;br&gt;&lt;br&gt;<br>
<br>
.return:&lt;br&gt;<br>
&#xA0;&#xA0; &#xA0;RTS
				</div><div class="mdl-card--border"></div>