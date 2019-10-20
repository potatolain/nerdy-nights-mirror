<div class="mdl-card__title"><strong>GradualGames</strong> posted on 
		
			
				
				Jan 17, 2018 at 12:08:03 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>brilliancenp</b></i><br>
<br>
I have run into an issue and have an idea of how to deal with it but want to find out how other devs have tackled it. I have the need to capture an input string to perform a special player move. Think of it like throwing a fireball in street fighter 2 with ryu or ken. It isn&apos;t that many commands, I just want to do a double direction button push left or right.<br>
I had the idea to record the previous button presses and then have a timer that the double push needs to be pressed within that time. Is this on the correct track? How would you guys go about accomplishing this?</div>
I&apos;d probably use my current button history routine in a certain way. Here&apos;s the routine:<br>
<br>
;****************************************************************<br>
;Deserializes the controller into a buffer.<br>
;output: controller_buffer<br>
;****************************************************************<br>
.proc read_controller<br>
<br>
&#xA0; &#xA0; lda #$01<br>
&#xA0; &#xA0; sta CONTROLLER<br>
&#xA0; &#xA0; lda #$00<br>
&#xA0; &#xA0; sta CONTROLLER<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_a<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_b<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_select<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_start<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_up<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_down<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_left<br>
<br>
&#xA0; &#xA0; lda CONTROLLER<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol controller_buffer+buttons::_right<br>
<br>
&#xA0; &#xA0; rts<br>
<br>
.endproc<br>
<br>
What it does is record the last 8 states of every button in each byte of controller_buffer (which has reserved 8 bytes, one byte for each button). So, if someone JUST pressed a button, you can do this:<br>
<br>
lda controller_buffer+buttons::_a<br>
and #%00000011&#xA0; ;only care about the current and previous state<br>
cmp #%00000001 ;since we&apos;re now only looking at the most recent two bits, if the last bit was 0, and the current bit was 1, we now know the user JUST pressed the button.<br>
<br>
If I wanted to detect a double press, I might double up the technique and record a history of actual detected presses, with another buffer like this:<br>
<br>
.proc record_a_presses<br>
<br>
;TODO: Add code to make recorded presses expire after a certain amount of time by<br>
;rotating a 0 into button_a_pressed_buffer every few frames. this timer would get<br>
;reset any time an actual press has been recorded, too.<br>
<br>
lda controller_buffer+buttons::_a<br>
and #%00000011&#xA0; ;only care about the current and previous state<br>
cmp #%00000001 ;since we&apos;re now only looking at the most recent two bits, if the last bit was 0, and the current bit was 1, we now know the user JUST pressed the button.<br>
beq button_not_just_pressed<br>
<br>
&#xA0; &#xA0; ;Store that button a was actually pressed into button_a_pressed_buffer<br>
&#xA0; &#xA0; lda #1<br>
&#xA0; &#xA0; ror<br>
&#xA0; &#xA0; rol button_a_pressed_buffer<br>
<br>
button_not_just_pressed:<br>
<br>
&#xA0; &#xA0; rts<br>
<br>
.endproc<br>
<br>
....I&apos;d call that&#xA0;record_a_presses routine over and over again on each frame (as well as the controller read routine above), and to detect a double tap I would do this:<br>
<br>
lda button_a_pressed_buffer<br>
and&#xA0; #%00000111&#xA0; ;examine last three states of whether button a was pressed<br>
cmp #%00000011&#xA0; ;this would mean two presses in a row (ONLY) were recorded<br>
bne double_tap_not_detected<br>
<br>
;Do your double tap action here<br>
<br>
double_tap_not_detected:<br>
<br>
<br>
...This might not be quite what you want either, as it may not take timing into consideration. There are other ways you could do it, but I&apos;m fond of the bit history method, as it comes in handy for handling other types of transitions, not just button presses.<br>
<br>
*edit* I&apos;m thinking about timing, and you could make the button_a_pressed_buffer expire by rotating an unpressed state into it every few frames or something. Currently it&apos;ll detect the last two button presses no matter how much time passes.
				</div><div class="mdl-card--border"></div>