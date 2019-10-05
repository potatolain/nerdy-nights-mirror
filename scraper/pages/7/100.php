<div class="mdl-card__title"><strong>glenn101</strong> posted on 
		
			
				
				Feb 21, 2012 at 2:48:48 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m trying to compress my code for loading/moving paddle sprites. I&apos;m using 6 tiles for each paddle.<br>
In my code to move the paddles, I&apos;ve made it so I run a subroutine to take care of the middle paddle sprites.<br>
I&apos;m using a 4 byte variable for the middle sprites, I have 2 separate variables for the top and bottom sprites which I use for collision detection with the border.<br>
This is my current move paddle up code:<br>
<br>
MovePaddleUp:<br>
&#xA0;&#xA0;&#xA0; LDX #$00<br>
;;if up button pressed<br>
&#xA0;&#xA0;&#xA0; LDA buttons1 ; 3rd bit is up. Don&apos;t care about other bits.<br>
&#xA0;&#xA0;&#xA0; AND #%00001000 ; if it isn&apos;t pressed the zero flag is set so we skip.<br>
&#xA0;&#xA0;&#xA0; BEQ MovePaddleUpDone ; Up button wasn&apos;t pressed skip code.<br>
TopPaddle<br>
&#xA0;&#xA0;&#xA0; LDA paddle1ytop<br>
&#xA0;&#xA0;&#xA0; SEC<br>
&#xA0;&#xA0;&#xA0; SBC #$01<br>
&#xA0;&#xA0;&#xA0; STA paddle1ytop<br>
<br>
&#xA0;&#xA0;&#xA0; JSR UpPaddleNext ; jump to subroutine for the inbetween paddles.<br>
<br>
&#xA0;&#xA0;&#xA0; LDA paddle1ybot<br>
&#xA0;&#xA0;&#xA0; SEC<br>
&#xA0;&#xA0;&#xA0; SBC #$01<br>
&#xA0;&#xA0;&#xA0; STA paddle1ybot<br>
BottomPaddle<br>
;; if paddle top &gt; top wall<br>
;; move paddle top and bottom up<br>
MovePaddleUpDone:<br>
<br>
Here is the subroutine:<br>
&#xA0;&#xA0;&#xA0; LDX #$00<br>
UpPaddleNext:<br>
&#xA0;&#xA0;&#xA0; LDA paddle1ynext,x<br>
&#xA0;&#xA0;&#xA0; SEC<br>
&#xA0;&#xA0;&#xA0; SBC #$01<br>
&#xA0;&#xA0;&#xA0; STA paddle1ynext,x<br>
&#xA0;&#xA0;&#xA0; INX ; go to next byte in paddle1ynext?<br>
&#xA0;&#xA0;&#xA0; CPX $03<br>
&#xA0;&#xA0;&#xA0; BNE UpPaddleNext<br>
RTS<br>
I think the problem lies in my subroutine or my initialising of variables which is below, is it possible to access the next byte of memory stored in my variable with the above syntax?<br>
<br>
I initialise the variables in the 4 byte variable as follows:<br>
<br>
&#xA0; LDA #$68<br>
&#xA0; STA paddle1ynext<br>
<br>
&#xA0; LDA #$70<br>
&#xA0; STA paddle1ynext+1<br>
<br>
&#xA0; LDA #$78<br>
&#xA0; STA paddle1ynext+2<br>
<br>
&#xA0; LDA #$80<br>
&#xA0; STA paddle1ynext+3<br>
<br>
Is that correct syntax? I thought I&apos;ve seen it somewhere.<br>
<br>
Basically what is happening on screen is that some of the paddle sprite appears at the top and bottom of the screen, not a full tile just a small section. Then it goes completely offscreen, then the full paddle comes together for a second and I can move it together as I intend. But if I keep moving it up the top sprite of the paddle goes above all the rest creating a gap. Could this be related to Vblank time?
				</div><div class="mdl-card--border"></div>