<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Oct 17, 2014 at 8:29:15 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					A technique I originally learned from a guy named banshaku over at nesdev is really easy to use and highly flexible. I know you&apos;re using the power pad but I imagine the same technique would transfer over.<br>
<br>
.proc controller_read<br>
<br>
lda #$01<br>
sta $4016<br>
lda #$00<br>
sta $4016<br>
<br>
;a<br>
lda $4016<br>
ror<br>
rol buffer_controller<br>
<br>
;b<br>
lda $4016<br>
ror<br>
rol buffer_controller+1<br>
<br>
;select<br>
lda $4016<br>
ror<br>
rol buffer_controller+2<br>
<br>
;start<br>
lda $4016<br>
ror<br>
rol buffer_controller+3<br>
<br>
;up<br>
lda $4016<br>
ror<br>
rol buffer_controller+4<br>
<br>
;down<br>
lda $4016<br>
ror<br>
rol buffer_controller+5<br>
<br>
;left<br>
lda $4016<br>
ror<br>
rol buffer_controller+6<br>
<br>
;right<br>
lda $4016<br>
ror<br>
rol buffer_controller+7<br>
<br>
rts<br>
.endproc<br>
<br>
<br>
What this does is rotate the current state of each controller button into a byte in an array called buffer_controller. Then, each byte in buffer_controller holds the current state of the button, and the history for 7 previous frames. Typically you won&apos;t need all 7 bits of history. But to detect an off-to-on transition for example you could go (assuming you called the routine above for the current frame):<br>
<br>
;get out the button press history for the A button<br>
lda buffer_controller<br>
and #%00000011 ;isolate only the current and previous state<br>
cmp #%00000001 ;test whether the button transitioned from off to on<br>
beq player_hit_button<br>
player_did_not_hit_button:<br>
<br>
jmp done<br>
player_hit_button:<br>
<br>
done:<br>
<br>
It makes the juggling of states for current and previous a little simpler to visualize, plus you don&apos;t need extra bytes for each button for previous states--just one byte per button holding a history of presses.<br>
<br>
That rotating buffer technique is a neat one, too, as it can come in handy in other situations. For example, you could layer on another buffer for rotating detected off-to-on transitions...this would make it easy to implement a cheat sequence of buttons for example, or sequence of buttons for executing a fighting game move.
				</div><div class="mdl-card--border"></div>