<div class="mdl-card__title"><strong>MadnessVX</strong> posted on 
		
			
				
				Jan 8, 2014 at 4:31:46 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Quick question. I have a routine that updates 6 sprites based off the first one. When I move the sprites all together, the first sprite is a pixel or two ahead of the rest. My movement routine moves only the first sprite. The code is similar to MRN&apos;s in his engine building tuts. 
<br>
<br>Is there a way to compensate for this delay? Here are the subroutines:
<br>
<br>MovePlayer:
<br>  LDA UpHeld                 ;Up
<br>  CMP #$01
<br>  BNE .NotUp
<br>  LDA PLAYER_SPRITE_RAM
<br>  SEC
<br>  SBC #$03
<br>  STA PLAYER_SPRITE_RAM
<br>.NotUp
<br>  LDA DownHeld               ;Down
<br>  CMP #$01
<br>  BNE .NotDown
<br>  LDA PLAYER_SPRITE_RAM
<br>  CLC
<br>  ADC #$03
<br>  STA PLAYER_SPRITE_RAM
<br>.NotDown
<br>  LDA LeftHeld                ;Left
<br>  CMP #$01
<br>  BNE .NotLeft
<br>  LDA PLAYER_SPRITE_RAM+3
<br>  SEC
<br>  SBC #$03
<br>  STA PLAYER_SPRITE_RAM+3
<br>.NotLeft
<br>  LDA RightHeld              ;Right
<br>  CMP #$01
<br>  BNE .End
<br>  LDA PLAYER_SPRITE_RAM+3
<br>  CLC
<br>  ADC #$03
<br>  STA PLAYER_SPRITE_RAM+3
<br>.End
<br>  RTS
<br>
<br>UpdatePlayerSprites:
<br>  LDA PLAYER_SPRITE_RAM   ;Update vertical positions.
<br>  STA PLAYER_SPRITE_RAM+4
<br>  CLC
<br>  ADC #$08
<br>  STA PLAYER_SPRITE_RAM+8
<br>  STA PLAYER_SPRITE_RAM+12
<br>  CLC
<br>  ADC #$08
<br>  STA PLAYER_SPRITE_RAM+16
<br>  STA PLAYER_SPRITE_RAM+20
<br>  CLC
<br>  ADC #$08
<br>  STA PLAYER_SPRITE_RAM+24
<br>  STA PLAYER_SPRITE_RAM+28
<br>  LDA PLAYER_SPRITE_RAM+3 ;Update horizontal positions.
<br>  STA PLAYER_SPRITE_RAM+11
<br>  STA PLAYER_SPRITE_RAM+19
<br>  STA PLAYER_SPRITE_RAM+27
<br>  CLC
<br>  ADC #$08
<br>  STA PLAYER_SPRITE_RAM+7
<br>  STA PLAYER_SPRITE_RAM+15
<br>  STA PLAYER_SPRITE_RAM+23
<br>  STA PLAYER_SPRITE_RAM+31
<br>  RTS
				</div><div class="mdl-card--border"></div>