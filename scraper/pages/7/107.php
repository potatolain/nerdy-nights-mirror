<div class="mdl-card__title"><strong>glenn101</strong> posted on 
		
			
				
				Feb 21, 2012 at 9:35:29 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hmm, now I have a collision issue,I&apos;m certain this time it&apos;s just a syntax thing. Am I using CMP correctly with variables? I&apos;m sure my logic is right, because if ballx <paddle1x and as ball checkpaddlecollision: code for functions i idea if m my others. same the then using x>&lt; paddle1x in my first check, the code executes as I want.</paddle1x><br>
<br>
CheckPaddleCollision:<br>
&#xA0; ;;if ball x &lt; paddle1x<br>
&#xA0; LDA ballx&#xA0;&#xA0;&#xA0;<br>
&#xA0; CMP #PADDLE1X<br>
&#xA0; BCS CheckPaddleCollisionDone ; PADDLE1X=PADDLE1X-ballx, if ballx<paddle1x carry code. execute no so><br>
&#xA0; ;;if bally &gt; paddleytop<br>
&#xA0; LDA bally<br>
&#xA0; CMP #paddle1ytop<br>
&#xA0; BCC CheckPaddleCollisionDone ; paddle1ytop=paddle1ytop-bally, if bally&gt;paddletop then carry so execute code. If bally<paddleytop code. skip><br>
&#xA0; ;;if bally &lt; paddleybot<br>
&#xA0; LDA bally<br>
&#xA0; CMP #paddle1ybot&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;<br>
&#xA0; BCS CheckPaddleCollisionDone ; paddleybot=paddleybot-bally, if bally<paddlebot carry code. execute no so><br>
&#xA0; ;;Bounce ball now.<br>
&#xA0; LDA #$01<br>
&#xA0; STA ballright&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; ball now moves right on next NMI.<br>
&#xA0; LDA #$00<br>
&#xA0; STA ballleft&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;bounce, ball now moving right<br>
CheckPaddleCollisionDone:<paddle1x and as ball checkpaddlecollision: code for functions i idea if m my others. same the then using x></paddle1x></paddlebot></paddleytop></paddle1x><br>
<br>
*EDIT*<br>
I think I&apos;ve got my subtracts around the wrong way in my comments, CMP performs a SUB the same way except it isn&apos;t stored in memory, I&apos;ve thought of it back-to-front that may be the problem.<br>
<br>
*EDIT*<br>
Fixed!! That damn CMP got me again! I should be using CMP &quot;varname&quot; not CMP # &quot;varname&quot;
				</div><div class="mdl-card--border"></div>