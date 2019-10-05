<div class="mdl-card__title"><strong>KennyB</strong> posted on 
		
			
				
				Dec 28, 2012 at 6:24:45 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>3GenGames</b></i><br>
	<br>
	Games will run at 50Hz on a PAL NES, and 60HZ on a NTSC NES.<br>
	<br>
	As for it being after the wall, make sure you&apos;re doing your compares right. It&apos;s possible it&apos;s doing it because at 6 pixels, it&apos;s a far distance to cover each frame so it won&apos;t actually be seen hitting the wall when it goes past it.</div>
<div class="FTQUOTE">
	<i>Originally posted by: <b>KHAN Games</b></i><br>
	<br>
	If you&apos;re moving the ball 5 pixels per frame, it may miss your compare completely if you&apos;re doing a branch if equal. Make sure you&apos;re doing a branch if greater/less than!</div>
<br>
I used the BCC and BCS instructions after a CMP. So they will branch if greater/less than.&#xA0;<br>
<br>
&#xA0;CheckCollisionRight:<br>
<div>
	&#xA0; LDA boxRightX<span class="Apple-tab-span" style="white-space&lt;span class=" sprites_emoticons absmiddle" id="emo_tongue"></span>re&quot;&gt; </div>
<div>
	&#xA0; CMP #RIGHTWALL</div>
<div>
	&#xA0; BCC CheckCollisionRightSkipper <span style="color:#008000;">; </span><span style="color:#ff0000;">if A &lt; RIGHTWALL ==&gt; Carry is set to 0 ==&gt;jump to label and skip over the direction change. If A &gt;= RIGHTWALL ==&gt; Carry = 1 ==&gt; No jump to label and run change direction code</span></div>
<div>
	&#xA0; LDA #$00</div>
<div>
	&#xA0; STA ballright</div>
<div>
	&#xA0; LDA #$01</div>
<div>
	&#xA0; STA ballleft &#xA0;&#xA0;</div>
<div>
	&#xA0; CheckCollisionRightSkipper:</div>
<div>
	&#xA0; JMP CheckCollisionRightDone<span class="Apple-tab-span" style="white-space&lt;span class=" sprites_emoticons absmiddle" id="emo_tongue"></span>re&quot;&gt; </div>
<div>
	&#xA0;&#xA0;</div>
<div>
	CheckCollisionLeft:</div>
<div>
	&#xA0; LDA boxLeftX</div>
<div>
	&#xA0; CMP #LEFTWALL</div>
<div>
	&#xA0; BCS CheckCollisionLeftSkipper &#xA0; &#xA0;<span style="color: rgb(0, 128, 0);">;&#xA0;</span><span style="color: rgb(255, 0, 0);">if A &gt;= &#xA0;RIGHTWALL ==&gt; Carry is set to 1 ==&gt;jump to label and skip over the direction change. If A &lt; RIGHTWALL ==&gt; Carry = 0&#xA0;</span><span style="color: rgb(255, 0, 0);">==&gt; No jump to label and run change direction code</span></div>
<div>
	&#xA0; LDA #$01</div>
<div>
	&#xA0; STA ballright</div>
<div>
	&#xA0; LDA #$00</div>
<div>
	&#xA0; STA ballleft&#xA0;</div>
<div>
	&#xA0; CheckCollisionLeftSkipper:</div>
<div>
	&#xA0; JMP CheckCollisionLeftDone<span class="Apple-tab-span" style="white-space&lt;span class=" sprites_emoticons absmiddle" id="emo_tongue"></span>re&quot;&gt;<br>
	<br>
	<br>
	So the ball always bounces. But at the higher speeds, it often bounces to soon or to late. I&apos;m thinking that it&apos;s impossible to eliminate this problem as it only updates at 50/60 Hz.<br>
	If the ball is 1 pixel before the wall in frame 1 ==&gt; no hit ==&gt; no change of direction.<br>
	In the next frame the ball will be 4 pixels behind the wall ==&gt; it will branch ==&gt; change direction. But it will still update the sprite for that frame and it will show it 4 pixels behind the wall.&#xA0;<br>
	<br>
	And If I create a loop which will update the location of the ball one pixel a time, it will slow down my ball :<br>
	==&gt; frame 1 ==&gt; loop 1 ==&gt; 1 pixel moved&#xA0;<br>
	==&gt; frame 2 ==&gt; loop 2 ==&gt; 1 pixel moved<br>
	==&gt; frame 3 ==&gt; loop 3 ==&gt; 1 pixel moved<br>
	==&gt; frame 4 ==&gt; loop 4 ==&gt; 1 pixel moved<br>
	==&gt; frame 5 ==&gt; loop 5 ==&gt; 1 pixel moved<br>
	<br>
	So in the end we still need 5 frames to perform 5 loops and we move only 5 pixels ==&gt; which is exactly the same as moving 1 pixel a frame (or at a speed of 1 instead of 5).<br>
	<br>
	<br>
	<br>
	&#xA0;</div>
				</div><div class="mdl-card--border"></div>