<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 22, 2015 at 9:10:18 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>FarruOne</b></i><br>
<br>
Hi! I am new to NES developement and I find these tutorials truly valuable.<br>
I am trying to scroll on moving to the right, so I moved the code in the NMI block to the Right button one. However, when I move right, the game screws up and I don&apos;t know what I&apos;m doing wrong.<br>
<br>
My ASM code:&#xA0;<a href="http://pastebin.com/Zmv0H25A" target="_blank" original-href="http://pastebin.com/Zmv0H25A">http://pastebin.com/Zmv0H25A</a><br>
<br>
Edit: this problem is solved if I move the controller block right before the PPU clean up section, but then the background goes by fits and starts.</div>
<br>
Welcome. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
845 lines of code are pretty time consuming to check out: do you have an idea about what the problem could be and which snippet of code to look for?<br>
<br>
Also, the way you check for inputs from the joypad is excellent to begin learning and understand how reading from the controllers works on a NES, but in the following nerdy nights chapters better alternatives, using subroutines, are explained.<br>
<br>
Such as:<br>
&#xA0;
<pre style="margin: 0px; font: 10px Monaco;"><span style="font-family:courier new,courier,monospace;"><span style="letter-spacing: 0px;">ReadController:</span><br><br><span style="letter-spacing: 0px;">  LDA #$01</span><br><br><span style="letter-spacing: 0px;">  STA $4016</span><br><br><span style="letter-spacing: 0px;">  LDA #$00</span><br><br><span style="letter-spacing: 0px;">  STA $4016</span><br><br><span style="letter-spacing: 0px;">  LDX #$08</span><br><br><span style="letter-spacing: 0px;">ReadControllerLoop:</span><br><br><span style="letter-spacing: 0px;">  LDA $4016</span><br><br><span style="letter-spacing: 0px;">  LSR A           ; bit0 -&gt; Carry</span><br><br><span style="letter-spacing: 0px;">  ROL buttons     ; bit0 &lt;- Carry</span><br><br><span style="letter-spacing: 0px;">  DEX</span><br><br><span style="letter-spacing: 0px;">  BNE ReadControllerLoop</span><br><br><span style="letter-spacing: 0px;">  RTS</span></span></pre><br><br><p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 10px/normal Monaco; ">&#xA0;</p>
&#xA0;<a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8747" target="_blank" original-href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=8747">http://nintendoage.com/forum/mess...</a><br>
<br>
Once you fully understand the concept, this would make your code shorter, and your life easier. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>