<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jul 24, 2015 at 7:50:08 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>sweggreg</b></i><br>
<br>
I can not get this ball to bounce off this paddle. Can someone who knows a bit more of what they&apos;re doing look at this code, specifically the checkpaddlecollision section and tell me why this isn&apos;t bouncing back.<br>
Thanks.</div>
Not sure if it&apos;s the reason, but you&apos;re using the wrong&#xA0;commands when you&apos;re subtracting.<br>
<br>
---------------<br>
<br>
&#xA0; LDA ballx ;;if ball x &lt; paddle1x<br>
&#xA0; CLC<br>
&#xA0; SBC #$08<br>
&#xA0; CMP #PADDLE1X<br>
&#xA0; BCC CheckPaddleCollisionDone<br>
<br>
&#xA0;&#xA0;LDA bally ;;&#xA0;&#xA0;&#xA0; if ball y &lt; paddle y bottom<br>
&#xA0; CLC<br>
&#xA0; SBC #$08<br>
&#xA0; CMP paddle1ybot<br>
&#xA0; BCC CheckPaddleCollisionDone<br>
<br>
--------------------<br>
<br>
Should be SEC/SBC if you&apos;re subtracting and CLC/ADC if you&apos;re adding.&#xA0; Let me know if this doesn&apos;t fix it and I&apos;ll dig a little deeper.
				</div><div class="mdl-card--border"></div>