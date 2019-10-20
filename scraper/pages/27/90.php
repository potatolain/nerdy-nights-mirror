<div class="mdl-card__title"><strong>pk space jam</strong> posted on 
		
			
				
				Nov 13, 2013 at 11:46:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					OK so I am trying to make my sprite duck. I really need help, cant sleep until i figure this out, what am i doing wrong here. I am also JSR&apos;ing to LookForDuck in my playing engine. When I press down, nothing is happening.<br>
<br>
LookForDuck:<br>
LDA DownHeld<br>
CMP #$01<br>
BNE .End<br>
LDA $0301<br>
CMP #$1B<br>
BCC .Left<br>
LDA #$01<br>
STA PlayerisDucking<br>
RTS<br>
.Left:<br>
LDA #$02<br>
STA PlayerisDucking<br>
.End:<br>
RTS<br>
<br>
Ducking:<br>
LDA PlayerisDucking<br>
CMP #$00<br>
BEQ .End<br>
CMP #$01<br>
BEQ .Left<br>
CMP #$02<br>
BEQ .Right<br>
.End:<br>
RTS<br>
.Left:<br>
LDA DownHeld<br>
CMP #$01<br>
BEQ .ResetL<br>
LDA #$09<br>
STA $0301<br>
LDA #$0A<br>
STA $0305<br>
LDA #$19<br>
STA $0309<br>
LDA #$1A<br>
STA $030D<br>
RTS<br>
.ResetL:<br>
JSR ResetSpritesLeft<br>
LDA #$00<br>
STA PlayerisDucking<br>
RTS<br>
.Right:<br>
LDA DownHeld<br>
CMP #$01<br>
BEQ .ResetR<br>
LDA #$29<br>
STA $0301<br>
LDA #$2A<br>
STA $0305<br>
LDA #$39<br>
STA $0309<br>
LDA #$3A<br>
STA $030D<br>
RTS<br>
.ResetR:<br>
JSR ResetSpritesRight<br>
LDA #$00<br>
STA PlayerisDucking<br>
RTS<br>
<br>
EDIT: I ended up figuring this out guys, here is the corrected code, also had to JSR to Ducking in game engine.<br>
<br>
<div>
	LookForDuck:</div>
<div>
	&#xA0; LDA DownHeld</div>
<div>
	&#xA0; CMP #$01</div>
<div>
	&#xA0; BNE .End</div>
<div>
	&#xA0; LDA $0301</div>
<div>
	&#xA0; CMP #$1B</div>
<div>
	&#xA0; BCC .Left</div>
<div>
	&#xA0; LDA #$01</div>
<div>
	&#xA0; STA PlayerisDucking</div>
<div>
	&#xA0; RTS</div>
<div>
	.Left:</div>
<div>
	&#xA0; LDA #$02</div>
<div>
	&#xA0; STA PlayerisDucking</div>
<div>
	.End:</div>
<div>
	&#xA0; RTS</div>
<div>
	&#xA0;&#xA0;</div>
<div>
	Ducking:</div>
<div>
	&#xA0; LDA PlayerisDucking</div>
<div>
	&#xA0; CMP #$00</div>
<div>
	&#xA0; BEQ .End</div>
<div>
	&#xA0; CMP #$01</div>
<div>
	&#xA0; BEQ .Left</div>
<div>
	&#xA0; CMP #$02</div>
<div>
	&#xA0; BEQ .Right</div>
<div>
	.End:</div>
<div>
	&#xA0; RTS</div>
<div>
	.Left:</div>
<div>
	&#xA0; LDA DownHeld</div>
<div>
	&#xA0; CMP #$01</div>
<div>
	&#xA0; BNE .ResetL</div>
<div>
	&#xA0; LDA #$29</div>
<div>
	&#xA0; STA $0301</div>
<div>
	&#xA0; LDA #$2A</div>
<div>
	&#xA0; STA $0305</div>
<div>
	&#xA0; LDA #$39</div>
<div>
	&#xA0; STA $0309</div>
<div>
	&#xA0; LDA #$3A</div>
<div>
	&#xA0; STA $030D</div>
<div>
	&#xA0; RTS</div>
<div>
	.ResetL:</div>
<div>
	&#xA0; JSR ResetSpritesLeft</div>
<div>
	&#xA0; LDA #$00</div>
<div>
	&#xA0; STA PlayerisDucking</div>
<div>
	&#xA0; RTS</div>
<div>
	.Right:</div>
<div>
	&#xA0; LDA DownHeld</div>
<div>
	&#xA0; CMP #$01</div>
<div>
	&#xA0; BNE .ResetR</div>
<div>
	&#xA0; LDA #$09</div>
<div>
	&#xA0; STA $0301</div>
<div>
	&#xA0; LDA #$0A</div>
<div>
	&#xA0; STA $0305</div>
<div>
	&#xA0; LDA #$19</div>
<div>
	&#xA0; STA $0309</div>
<div>
	&#xA0; LDA #$1A</div>
<div>
	&#xA0; STA $030D</div>
<div>
	&#xA0; RTS</div>
<div>
	.ResetR:</div>
<div>
	&#xA0; JSR ResetSpritesRight</div>
<div>
	&#xA0; LDA #$00</div>
<div>
	&#xA0; STA PlayerisDucking</div>
<div>
	&#xA0; RTS</div>
				</div><div class="mdl-card--border"></div>