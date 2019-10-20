<div class="mdl-card__title"><strong>sempressimo</strong> posted on 
		
			
				
				Nov 2, 2015 at 1:19:31 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I am having a bit of trouble with collision against background I can&apos;t figure out. Attached is the .nes so that you can see it in the emulator. Logical tiles and logical player box are all 16x16 pixels.<br>
<br>
Collisions againts left and right seem about right. But I am having an offset of about 3 pixels against up and down. Also it is weird I had to add 15 instead 16 to the player width to get the right wall collision right (i.e. no gaps).<br>
<br>
I am testing againts a collision map of #$00 for walk or #$01 for wall created as .db(s). The player box position is updated each frame. Some relevant code is:<br>
<br>
;--------------------------------------<br>
<br>
NMI:<br>
<br>
&#xA0;&#xA0;...<br>
<br>
&#xA0; JSR StoreLastPlayerPos<br>
<br>
&#xA0; JSR ReadController1&#xA0; ; get the current button data for player 1<br>
<br>
&#xA0; JSR ProcessUserInput<br>
<br>
&#xA0; JSR UpdatePlayerBox<br>
&#xA0;<br>
&#xA0; JSR CheckPlayerBackgroundCollision<br>
<br>
&#xA0; LDA player_collided<br>
&#xA0; CMP #$01<br>
&#xA0; BEQ DontUpdatePosition<br>
&#xA0;<br>
&#xA0; JSR UpdatePlayerSpritePosition<br>
&#xA0;<br>
&#xA0; RTI<br>
<br>
;------------------------<br>
; Subroutines<br>
;------------------------<br>
UpdatePlayerBox:<br>
<br>
&#xA0; ; Player position + width (or) height&#xA0;<br>
&#xA0; LDA player_x<br>
&#xA0; CLC<br>
&#xA0; ADC player_sprite_dimension<br>
&#xA0; STA player_x_w<br>
&#xA0;<br>
&#xA0; LDA player_y<br>
&#xA0; CLC<br>
&#xA0; ADC player_sprite_dimension<br>
&#xA0; STA player_y_h<br>
<br>
&#xA0; RTS<br>
<br>
;------------------------<br>
; Collision subroutines<br>
;------------------------<br>
CheckPlayerBackgroundCollision:<br>
<br>
&#xA0; ; Reset flag to no collition<br>
&#xA0; LDA #$00<br>
&#xA0; STA player_collided<br>
&#xA0;<br>
&#xA0; ; Moving Right?<br>
&#xA0; LDA player_dir<br>
&#xA0; CMP #$01<br>
&#xA0; BNE NotMovingRight<br>
&#xA0; JMP CheckBackgroundCollitionRight<br>
<br>
NotMovingRight:<br>
<br>
&#xA0; ; Moving Left?<br>
&#xA0; LDA player_dir<br>
&#xA0; CMP #$03<br>
&#xA0; BNE NotMovingLeft<br>
&#xA0; JMP CheckBackgroundCollitionLeft<br>
<br>
NotMovingLeft:<br>
<br>
&#xA0; ; Moving Down?<br>
&#xA0; LDA player_dir<br>
&#xA0; CMP #$02<br>
&#xA0; BNE NotMovingDown<br>
&#xA0; JMP CheckBackgroundCollitionDown<br>
<br>
NotMovingDown:<br>
<br>
&#xA0; ; Moving Up?<br>
&#xA0; LDA player_dir<br>
&#xA0; CMP #$00<br>
&#xA0; BNE NotMovingUp<br>
&#xA0; JMP CheckBackgroundCollitionUp<br>
&#xA0;<br>
NotMovingUp:<br>
&#xA0;<br>
&#xA0; RTS ; Player is idle, skip background collision<br>
&#xA0;<br>
CheckBackgroundCollitionUp:<br>
<br>
&#xA0; LDA player_x<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A ; / 16<br>
&#xA0; STA object_tile_x ; Contains top right X point tile position<br>
&#xA0;<br>
&#xA0; LDA player_y<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; STA object_tile_y ; Contains top right X point tile position<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A ; * 16<br>
&#xA0; CLC<br>
&#xA0; ADC object_tile_x ; + x tile pos<br>
&#xA0;<br>
&#xA0; TAX ; store the calc in X register<br>
&#xA0;<br>
&#xA0; LDA background_0_Collision, x<br>
&#xA0; CMP #$01<br>
&#xA0; BNE NoBackgroundCollisionUp<br>
&#xA0;<br>
&#xA0; LDA #$01<br>
&#xA0; STA player_collided<br>
<br>
NoBackgroundCollisionUp:<br>
&#xA0;<br>
&#xA0; RTS<br>
&#xA0;<br>
CheckBackgroundCollitionDown:<br>
<br>
&#xA0; LDA player_x<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; STA object_tile_x ; Contains top right X point tile position<br>
&#xA0;<br>
&#xA0; LDA player_y_h<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; STA object_tile_y ; Contains top right X point tile position<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A ; * 16<br>
&#xA0; CLC<br>
&#xA0; ADC object_tile_x ; + x tile pos<br>
&#xA0;<br>
&#xA0; TAX ; store the calc in X register<br>
&#xA0;<br>
&#xA0; LDA background_0_Collision, x<br>
&#xA0; CMP #$01<br>
&#xA0; BNE NoBackgroundCollisionDown<br>
&#xA0;<br>
&#xA0; LDA #$01<br>
&#xA0; STA player_collided<br>
<br>
NoBackgroundCollisionDown:<br>
&#xA0;<br>
&#xA0; RTS<br>
&#xA0;<br>
CheckBackgroundCollitionLeft:<br>
&#xA0;<br>
&#xA0; LDA player_x<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; STA object_tile_x ; Contains top right X point tile position<br>
&#xA0;<br>
&#xA0; LDA player_y<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; LSR A<br>
&#xA0; STA object_tile_y ; Contains top right X point tile position<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A<br>
&#xA0; ASL A ; * 16<br>
&#xA0; CLC<br>
&#xA0; ADC object_tile_x<br>
&#xA0;<br>
&#xA0; TAX ; store the calc in X register<br>
&#xA0;<br>
&#xA0; LDA background_0_Collision, x<br>
&#xA0; CMP #$01<br>
&#xA0; BNE NoBackgroundCollisionLeft<br>
&#xA0;<br>
&#xA0; LDA #$01<br>
&#xA0; STA player_collided<br>
<br>
NoBackgroundCollisionLeft:<br>
<br>
&#xA0; RTS<br>
<br>
background_0_Collision:<br>
<br>
&#xA0; .db $01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01<br>
&#xA0; .db $01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01<br>
&#xA0; .db $01,$00,$01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$00,$01<br>
&#xA0; .db $01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01,$01<br>
<br>
<br>
<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>