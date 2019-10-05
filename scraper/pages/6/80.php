<div class="mdl-card__title"><strong>removed04092017</strong> posted on 
		
			
				
				Jul 1, 2012 at 6:18:02 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Protip: Never compare to 0, it&apos;s never needed because there&apos;s a &quot;zero or not 0&quot; condition code. Whe you INX and it wraps to 0, it automagically sets the flag. <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
Another protip you can use later: Try to count down if it&apos;s to 0. You&apos;ll need to reverse your data but it saves bytes and CPU. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>&#xA0;<br>
<br>
Another normal tip: Stuf inbetween normal labels like:<br>
<br>
Label:<br>
&#xA0; LDA #$20<br>
&#xA0; LDA #$00<br>
LabelLoop:<br>
&#xA0; STA Somewhere<br>
&#xA0; DEX<br>
&#xA0; BPL LabelLoop<br>
AfterLabel:<br>
<br>
can use local labels. Local labels are names so that you can use generic label names like &quot;Loop&quot; everwhere. All you do it put a dot before the label and in between each global label with no period, it&apos;ll use the local one. You also need to put the . in the label name in your code too, but it&apos;s not hard. I&apos;ll give you some code of mine to check out if you need a detailed example.<br>
<br>
As for why the bricks aren&apos;t loading tight, I&apos;m not sure. You&apos;re starting it at the top left and writing it. They should just all be in the first 2 rows since you&apos;re doing 64 (2 rows) of tiles. I&apos;m not looking far into the code though. If you want to try to debug your code, ise FCEUX and open the debugger. On the top right do &quot;set breakpoint&quot; and make it for the PPU, make it memory location $2000 write, and then make it a write. It may catch a bug because of how it looks like it&apos;s writing the tiles, so you may be rewriting them later for some reason. Sorry I couldn&apos;t help too much, good luck. <span class="sprites_emoticons absmiddle" id="emo_smile"></span>
				</div><div class="mdl-card--border"></div>