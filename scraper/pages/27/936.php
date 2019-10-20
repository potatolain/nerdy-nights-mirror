<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Aug 31, 2017 at 5:15:36 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>brilliancenp</b></i><br>
	<br>
	Now keep in mind I am new so im sure this isn&apos;t optimized code. If you do see anything horrible let me know lol.</div>
<br>
<br>
Nothing horrible IMHO, of course, however, if this does NOT confuse you (if it does, forget about this post):<br>
<pre>; THIS BELOW IS A LOOKUP TABLE
; (this data is in ROM, probably .byte directive in NESASM, but not sure)
; MUTIPLY X4
XFOUR #$00 #$04 #$08 #$0C #$10 #$14 #$18 #$1C
      #$20 #$24 #$28 #$2C #$30 #$34 #$38 #$3C
; continue if you wish to, 64 bytes wasted maybe, but I found it useful.
; LOOKUP TABLE IMAGE LEFT
LFT #$03 #$01 #$07 #$05
; LOOKUP TABLE IMAGE RIGHT
RGT #$01 #$03 #$05 #$07<br><br>PlayerStill:
    ldx #$03
    LDA pDispFlags
    AND #%00000010
    BEQ PlayerRightStill<br><br>    PlayerLeftStill:
    lda LFT,x
    ldy XFOUR,x
    sta $0201,y
    LDA $0202,y
    ORA #%01000000
    sta $0202,y
    dex
    bpl PlayerLeftStill ; loops x = 03 02 01 00, when FF exit
    JMP PlayerStillDone<br><br>    PlayerRightStill:
    lda RGT,x
    ldy XFOUR,x
    sta $0201,y
    LDA $0202,y
    AND #%10111111
    sta $0202,y
    dex
    bpl PlayerRightStill ; loops x = 03 02 01 00, when FF exit<br><br>    PlayerStillDone:
    RTS
</pre>
<br>
<br>
Did not test it. Tell me if this works in NESASM.<br>
<br>
Kind Regards.<br>
<br>
<br>
Edit: Formatted better the code, removed a wrong comment.
				</div><div class="mdl-card--border"></div>