<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Jan 10, 2015 at 11:59:01 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>Dredster</b></i><br>
	<br>
	I see that it&apos;s latched by<br>
	LatchController:<br>
	LDA #$01<br>
	STA $4016<br>
	LDA #$00<br>
	STA $4016<br>
	Which is the same as writing it out like that. I understand how it cycles through the buttons. I just want to be able to make the sprite go up and down. It only goes left and right using B. BunnyBoy says to try to figure out how to move multiple sprites,figure out how to make the sprites move up and down and go left and right using the D-Pad buttons. I am not able to figure out how to do those things.</div>
<em><span><b>Controller Ports</b></span></em><br>
<p>
	<em><span>The controllers are accessed through memory port addresses $4016 and $4017.&#xA0; First you have to write the value $01 then the value $00 to port $4016.&#xA0; This tells the controllers to latch the current button positions.&#xA0; Then you read from $4016 for first player or $4017 for second player.&#xA0; <strong>The buttons are sent&#xA0; one at a time, in bit 0.&#xA0; If bit 0 is 0, the button is not pressed.&#xA0; If bit 0 is 1, the button is pressed.</strong></span></em></p>
<p>
	<strong><em><span>Button status for each controller is returned in the following order: A, B, Select, Start, Up, Down, Left, Right.</span></em></strong></p>
<p>
	<span>&#xA0; LDA #$01<br>
	&#xA0; STA $4016</span><br>
	<span>&#xA0; LDA #$00</span><br>
	<span>&#xA0; STA $4016 &#xA0; &#xA0; ; tell both the controllers to latch buttons</span></p>
<p>
	<span>&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - A<br>
	&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - B<br>
	&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - Select<br>
	&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - Start<br>
	&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - Up<br>
	&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - Down<br>
	&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - Left<br>
	&#xA0; LDA $4016 &#xA0; &#xA0; ; player 1 - Right</span></p>
<em><span><b>AND Instruction</b></span></em>
<p>
	<em><span><strong>Button information is only sent in bit 0, so we want to erase all the other bits.</strong>&#xA0; This can be done with the AND instruction.&#xA0; Each of the 8 bits is ANDed with the bits from another value.&#xA0; If the bit from both the first AND second value is 1, then the result is 1.&#xA0; Otherwise the result is 0.</span></em><br>
	<br>
	<br>
	If all this BunnyBoy wrote is undestood, try looking at the following (really bad, good-coding wise) example, hoping that you can find out what your code is missing. Think this way if this helps: when you ask about inputs, you get always <strong>_8_</strong> answers, yes or no (1 or 0), one for each possible input (A,B,Sel,Start,U,D,L,R), which are in bit 0 of a read to $4016, forcefully in that specific order.</p>
<pre><span>  LDA #$01
  STA $4016</span>
<span>  LDA #$00</span>
<span>  STA $4016     ; tell both the controllers to latch buttons<br><br><span>  LDA $4016     ; player 1 - A, you don&apos;t care about the answer
  LDA $4016     ; player 1 - B, you don&apos;t care<span><span> about the answer</span></span>
  LDA $4016     ; player 1 - Select, you don&apos;t care<span><span> about the answer</span></span>
  LDA $4016     ; player 1 - Start, you don&apos;t care<span><span> about the answer</span></span><br><br>  LDA $4016     ; player 1 - Up, NOW you DO care<span><span> about the answer
</span></span>  AND #%00000001 ; you want to keep only bit0
  BEQ SKIPUP    ; Up was NOT pressed, so skip the next instructions<br><br>  LDA $0200     ; sprite y position
  SEC           ; set carry
  SBC #$01      ; subtract 1
<span><span><span><span>  STA <span><span><span><span>$0200     ; sprite <span><span><span><span><span><span><span><span>NEW </span></span></span></span></span></span></span></span>y position</span></span></span></span></span></span></span></span>
  JMP SKIPDOWN  ; it is either Up or Down, so if Up is pressed you skip the next check<br><br>SKIPUP:
  <span><span>LDA $4016     ; player 1 - Down, NOW you DO care</span></span><span><span> about the answer
<span><span><span><span>  AND #%00000001 ; you want to keep only bit0
</span></span>  BEQ SKIPDOWN  ; Down was NOT pressed, so skip the next instructions
</span></span>
</span></span><span><span>  LDA $0200     ; sprite y position
  CLC           ; clear carry
  ADC #$01      ; add 1
  STA <span><span><span><span>$0200     ; sprite <span><span><span><span><span><span><span><span>NEW </span></span></span></span></span></span></span></span>y position<br><br></span></span></span></span>SKIPDOWN:
; ...           ; the program continues here
</span></span></span></span>
</pre>
It is ugly coding wise, but it works. <span class="sprites_emoticons absmiddle" id="emo_wink"></span><br>
<br>
Check the attachments (rename controller.txt to .asm).<br>
<br>
I hope this helps! <span class="sprites_emoticons absmiddle" id="emo_smile"></span><br>
<br>
- user
				</div><div class="mdl-card--border"></div>