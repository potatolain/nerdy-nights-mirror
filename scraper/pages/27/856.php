<div class="mdl-card__title"><strong>user</strong> posted on 
		
			
				
				Dec 16, 2016 at 8:16:22 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE">
	<i>Originally posted by: <b>SoleGooseProductions</b></i><br>
	<br>
	<div class="FTQUOTE">
		<i>Originally posted by: <b>Shiru</b></i><br>
		<br>
		To aim a bullet you just need atan2 function. You determine the angle that way, then take deltas for required speed using a table. atan2 may sound scary, but it fast it isn&apos;t too slow, check this implementation: <a href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle" target="_blank" original-href="http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle">http://codebase64.org/doku.php?id=base:8bit_atan2_8-bit_angle</a><br>
		<br>
		If you need range more than 8 bit, you can just divide the source vector by 2, 4, etc. This will be precise enough.<br>
		<br>
		And of course, never use 360 degree circle on 8 bit CPU. It should be 256 degree instead.</div>
	<br>
	Well, I&apos;ve clearly been putting off figuring out angles for a while! Time to clear out an old bookmark and make sense of it all.<br>
	<br>
	I followed your link Shiru, and got the routines plugged in and working (I think anyways). I have new A, Y, and X values coming out of the routine, but I have no clue what to do with them <span class="sprites_emoticons absmiddle" id="emo_smile"> </span>. Real programming sites don&apos;t really specify <em>how</em> to use the results, hahaha. I can make some things fly around the screen at what I am guessing is the correct angle, but they whiz by way too fast and are out of control. Any help would be greatly appreciated, thanks!</div>
<br>
<br>
<br>
Yes, I never understood the output of that routine too.<br>
<br>
Also, thinking about it, I was wondering, assuming someone has no problem wasting 1kB with 4 lookup tables (one for each quadrant), would this be an acceptable solution?<br>
<pre>; Variables
; MainX MainY TargX TargY
; OffsX OffsY DirX DirY<br><br>YAXIS:
  LDA MainY
  SEC
  SBC TargY
  ROL DirY       ; IF 1 TARGET IS ABOVE, IF 0 TARGET IS BELOW
  BNE XAXIS      ; TARGET IS ABOVE
DOWN:            ; TARGET IS BELOW
  LDA TargY
  SEC
  SBC MainY
XAXIS:
  STA OffsY      ; Y OFFSET IS HERE
  LDA MainX
  SEC
  SBC TargX
  ROL DirX       ; IF 1 TARGET IS LEFT, IF 0 TARGET IS RIGHT
  BNE SHIFT      ; TARGET IS LEFT
RIGHT:           ; TARGET IS RIGHT
  LDA TargX
  SEC
  SBC MainX
SHIFT:
  STA OffsX      ; X OFFSET IS HERE
  CMP 10
  BCS REDUCE
  LDA OffsY
  CMP 10
  BCC DONE
REDUCE:
  LDA OffsY
  LSR A
  STA OffsY
  LDA OffsX
  LSR A
  STA OffsX
  CMP 10
  BCS REDUCE
  LDA OffsY
  CMP 10
  BCS REDUCE
DONE:             ; OffsY is in A
  ASL A
  ASL A
  ASL A
  ASL A
  ADC OffsX       ; CARRY SHOULD BE CLEAR
  TAX             ; HERE THE INDEX = 16*Y+X
  LDA DirY
  BEQ TARGET_DOWN
  LDA DirX
  BEQ UPRIGHT
UPLEFT:                  ; TARGET IS UPLEFT
  LDA ANGLE_UPLEFT,x     ; LookUp Table
  RTS
UPRIGHT:                 ; TARGET IS UPRIGHT
  LDA ANGLE_UPRIGHT,x    ; LookUp Table
  RTS
TARGET_DOWN:
  LDA DirX
  BEQ DOWNRIGHT
DOWNLEFT:                ; TARGET IS DOWNLEFT
  LDA ANGLE_DOWNLEFT,x   ; LookUp Table
  RTS
DOWNRIGHT:               ; TARGET IS DOWNRIGHT
  LDA ANGLE_DOWNRIGHT,x  ; LookUp Table
  RTS</pre>
<br>
<br>
Disclaimer: I did not test this code, it might likely be inaccurate or contain syntax errors, and it surely could be optimized. Or probably it is maybe just silly. I wrote it now while thinking about what that other routine is supposed to do, and I was just wondering out of curiosity if this could be an acceptable alternative solution good coding wise, that&apos;s all.<br>
<br>
Thanks in advance to anyone who can explain more about the SGP link above, and/or about this subject (get a relative angle direction between two point) in general.<br>
<br>
Edit: corrected a comment in the code posted above.<br>
<br>
Edit II: optimized and corrected a branching blunder in the first lines of code posted here above.
				</div><div class="mdl-card--border"></div>