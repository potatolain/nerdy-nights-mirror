<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				May 12, 2016 at 2:36:51 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Alder</b></i><br>
<br>
Ah, okay. The only thing I&apos;m wondering is how to keep my Game Engine running at the right speed. Looking at your code, I&apos;m guessing that&apos;s what the sleeping variable is for.. are we just setting that to true at the end of the game engine, and checking it at the beginning of the infinite loop to know whether or not to run the game engine? Then setting it to false during NMI to make the game engine run one cycle after NMI returns?<br>
<br>
I noticed you put your sound engine/sleeping code before the skip_graphics_updates label. Can you explain what the updating_background variable is for? It seems it&apos;s doing more than just signalling that background tiles need redrawn?<br>
<br>
Thanks!</div>
Please take a look at this. it explains NMIs\Vblanks\Interrupts much better than I ever could. <a href="http://wiki.nesdev.com/w/index.php/The_frame_and_NMIs" target="_blank">http://wiki.nesdev.com/w/index.ph...</a><br>
<br>
I pretty much stole this right from Mario&apos;s Right Nut&apos;s tutorial on game engines: <a href="http://nintendoage.com/forum/messageview.cfm?catid=22&amp;threadid=37054" target="_blank">http://nintendoage.com/forum/mess...</a><br>
<br>
Here is the finished Forever: Loop. It&apos;s all explained in that Mario&apos;s Right Nut Tutorial. It&apos;s a really great Game State Engine.<br>
<br>
;----------------------------------------------------------------------<br>
;-----------------------START MAIN PROGRAM-----------------------------<br>
;---------------------------------------------------------------------- &#xA0;<br>
Forever:<br>
&#xA0; INC sleeping&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;wait for NMI<br>
<br>
.loop<br>
&#xA0; LDA sleeping<br>
&#xA0; BNE .loop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;wait for NMI to clear out the sleeping flag<br>
<br>
&#xA0; LDA #$01<br>
&#xA0; STA updating_background&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;;it will skip the NMI updates so as not to mess with your room loading routines<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0;&#xA0; JSR ReadController1&#xA0; ;;get the current button data<br>
&#xA0;&#xA0; JSR ReadController2<br>
&#xA0;<br>
&#xA0; JSR GameStateIndirect&#xA0;&#xA0;&#xA0; ;THIS RUNS THE GAME CODE DEPENDING ON WHAT GAME STATE I AM IN<br>
<br>
&#xA0; LDA GameState&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;If the game state is the same, do not update.<br>
&#xA0; CMP GameStateOld<br>
&#xA0; BEQ .next<br>
<br>
&#xA0; JSR GameStateUpdate&#xA0;&#xA0;&#xA0; ;IF THE GAME STATE HAS CHANGED IN THE MAIN CODE, THIS WILL UPDATE THE GameStateIndirect<br>
<br>
.next<br>
<br>
&#xA0; LDA #$00<br>
&#xA0; STA updating_background<br>
&#xA0; JMP Forever&#xA0;&#xA0;&#xA0;&#xA0; ;jump back to Forever, and go back to sleep
				</div><div class="mdl-card--border"></div>