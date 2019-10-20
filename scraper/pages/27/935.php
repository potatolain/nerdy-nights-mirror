<div class="mdl-card__title"><strong>brilliancenp</strong> posted on 
		
			
				
				Aug 31, 2017 at 1:42:02 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					So the code where I initilize it(bit 1: 0 = right, 1= left)
<pre>InitPlayer:
	LDA #%000000000; This is what I will switch to change left/right when program begins.  #%00000010 for left #%00000000 for right
	STA pDispFlags
	LDA #$04
	STA pSpriteCnt
	LDA #$01
	STA pSpeed
	RTS
</pre><br><br>Then when I check for a press (this will change the graphics tiles the character uses) 
<pre>        ReadA:
		LDA buttons1
		AND #APRESSED
		BNE MakeTransparent
		LDA pDispFlags
		AND #%11011111
		STA pDispFlags
		JMP ReadADone
		MakeTransparent:
			LDA pDispFlags
			ORA #%00100000
			STA pDispFlags
			LDA pDispFlags
			ORA #%00000100
			STA pDispFlags
			LDA pDispFlags
			AND #%11111110
			STA pDispFlags		
	ReadADone:
</pre>
Basically if the user presses A the sprites &apos;disappears&apos; except for the eyes.  When the player releases A the sprites reappear.  Code for this:
<pre>TurnPlayerInvisible:
	LDA pDispFlags
	AND #%00000010
	BEQ TurnPlayerInvisibleRight
	TurnPlayerInvisibleLeft:
		LDA #$0A
		STA $0201
		LDA #$09
		STA $0205
		LDA #$0C
		STA $0209
		LDA #$0B
		STA $020D
		JMP UpdatePlayerDone
	TurnPlayerInvisibleRight:
		LDA #$09
		STA $0201
		LDA #$0A
		STA $0205
		LDA #$0B
		STA $0209
		LDA #$0C
		STA $020D
	TurnPlayerInvisibleDone:
	RTS 
</pre>
Prior to any graphics logic is set the player to its still sprite mapping facing the direction it is supposed to.  This will get overriden if the player is moving but it does set the sprites in the correct position depending on the attribute flipping horizontally.  I have included this because it happens before we turn the player invisible.
<pre>PlayerStill:
	LDA pDispFlags
	AND #%00000010
	BEQ PlayerRightStill
	PlayerLeftStill:
		LDA #$03
		STA $0201
		LDA $0202
		ORA #%01000000
		STA $0202
		LDA #$01
		STA $0205
		LDA $0206
		ORA #%01000000	
		STA $0206
		LDA #$07
		STA $0209
		LDA $020A
		ORA #%01000000
		STA $020A
		LDA #$05
		STA $020D
		LDA $020E
		ORA #%01000000
		STA $020E
		JMP PlayerStillDone
	PlayerRightStill:
		LDA #$01
		STA $0201
		LDA $0202
		AND #%10111111
		STA $0202
		LDA #$03
		STA $0205
		LDA $0206
		AND #%10111111
		STA $0206
		LDA #$05
		STA $0209
		LDA $020A
		AND #%10111111
		STA $020A
		LDA #$07
		STA $020D
		LDA $020E
		AND #%10111111
		STA $020E
	PlayerStillDone:
	RTS
</pre><br><br>Literally the only thing I changed when it started working was moving the variable declaration down for pDispFlags about 2 lines.  In the post earlier this was called playerDisplayFlags.  Now keep in mind I am new so im sure this isn&apos;t optimized code.  If you do see anything horrible let me know lol.
				</div><div class="mdl-card--border"></div>