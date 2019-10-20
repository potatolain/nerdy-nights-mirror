<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				May 16, 2013 at 6:09:36 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>JKeefe56</b></i><br>
	<br>
	I hate to ask something like this, because I feel like it&apos;s asking too much. But I&apos;m working on a puzzle game. I can make a level of it, but then I get stuck. Is there anyone willing to write out a code to show me, that would do something like this, just so I can see how it is done?<br>
	<br>
	Just load a background screen and then when a certain button is pressed it loads the next background?<br>
	<br>
	I&apos;ve gotten stuck here a few times. Or if there&apos;s a NN that covers this that I missed, could you point me in that direction?</div>
<br>
LoadNametable:<br>
&#xA0; LDA $2002&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;normal loading routine<br>
&#xA0; LDA #$20<br>
&#xA0; STA $2006<br>
&#xA0; LDA #$00<br>
&#xA0; STA $2006<br>
SetNametable:<br>
&#xA0; LDA BG_ptr&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;BG_ptr is a variable in your zero page which tells the game<br>
&#xA0; ASL A&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;which level you&apos;re on.&#xA0; Everytime you beat a level, increment this.<br>
&#xA0; TAY<br>
&#xA0; LDA bkgd_pointer_table, y&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;pointer table which takes the BG_ptr variable and<br>
&#xA0; STA AddrLow&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;tells it which level data to load.<br>
&#xA0; LDA bkgd_pointer_table+1, y<br>
&#xA0; STA AddrHigh<br>
<br>
&#xA0; LDX #$04<br>
&#xA0; LDY #$00<br>
LoadBackgroundsLoop:<br>
&#xA0; LDA [AddrLow], y&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;load nametable<br>
&#xA0; STA $2007&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;draw tile<br>
&#xA0; INY&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;X is 0, so move on to get new counter number<br>
&#xA0; BNE LoadBackgroundsLoop<br>
;;Outer Loop<br>
&#xA0; INC AddrHigh<br>
&#xA0; DEX<br>
&#xA0; BNE LoadBackgroundsLoop<br>
&#xA0; RTS<br>
<br>
bkgd_pointer_table:&#xA0; ;;table of addresses for backgrounds.&#xA0; if BG_ptr is #$00, it will<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;;load the first one.&#xA0; #$01, the second.&#xA0; etc<br>
&#xA0; .dw gamebkgd0&#xA0;&#xA0; ;;level 0 background<br>
&#xA0; .dw gamebkgd1&#xA0;&#xA0; ;;level 1 background<br>
&#xA0; .dw gamebkgd2&#xA0;&#xA0; ;;level 2 background<br>
&#xA0; .dw gamebkgd3&#xA0;&#xA0; ;;level 3 background<br>
&#xA0; .dw gamebkgd4&#xA0;&#xA0; ;;level 4 background<br>
&#xA0; .dw gamebkgd5&#xA0;&#xA0; ;;level 5 background<br>
&#xA0; .dw gamebkgd6&#xA0;&#xA0; ;;level 6 background<br>
&#xA0; .dw gamebkgd7&#xA0;&#xA0; ;;level 7 background<br>
&#xA0; .dw gamebkgd8&#xA0;&#xA0; ;;level 8 background<br>
&#xA0; .dw gamebkgd9&#xA0;&#xA0; ;;level 9 background<br>
&#xA0; .dw gamebkgd10&#xA0; ;;level 10 background<br>
&#xA0; .dw gamebkgd11&#xA0; ;;level 11 background<br>
&#xA0; .dw gamebkgd12&#xA0; ;;level 12 background<br>
&#xA0; .dw gamebkgd13&#xA0; ;;level 13 background<br>
&#xA0; .dw gamebkgd14&#xA0; ;;level 14 background<br>
&#xA0; .dw gamebkgd15&#xA0; ;;level 15 background<br>
<br>
gamebkgd0:&#xA0; ;a full table of tile numbers that fill up the screen.&#xA0; you&apos;ll need one of these for<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;every &quot;.dw&quot; in the pointer table.<br>
&#xA0;&#xA0; &#xA0;.db $05,$05,$05,$05,$05,$05,$05,$05,$05,$05,$05,$05,$05,$05,$05,$05, etc, etc<br>
				</div><div class="mdl-card--border"></div>