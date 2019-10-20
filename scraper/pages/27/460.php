<div class="mdl-card__title"><strong>Vectrex28</strong> posted on 
		
			
				
				Dec 18, 2014 at 6:20:32 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I have a glitch in one of my games that is starting to get really annoying...<br>
I&apos;m trying to have my enemies &quot;alive&quot; on two nametables. This routine works great, however, it always thinks it&apos;s on nametable 1 when the scroll variable is at $00. The position of the enemies is contained in the enemyposx/enemyposy variables, and the enemiesnametable variable is the nametable the enemies are supposed to be on. The variables work fine according to the FCEUX hex editor, so I definitely think the problem is in that routine<br>
Sorry for the lack of annotations, I sometimes (90% of the time <span class="sprites_emoticons absmiddle" id="emo_tongue"></span>) forget to annotate my stuff<br>
<br>
LDX #$00<br>
LDY #$00<br>
SpritesPosLoop:<br>
LDA enemiesnametable,y<br>
BEQ NT0<br>
LDA enemiesposy,y<br>
STA $0224,x<br>
LDA enemiesposx,y<br>
SEC<br>
SBC scroll<br>
CMP enemiesposx,y<br>
BCC HideSprite2<br>
.keepon2<br>
STA $0227,x<br>
JSR BuildMetaEnemy<br>
JMP SpriteDone<br>
HideSprite2:<br>
LDA #$F0<br>
STA $0224,x<br>
STA $0227,x<br>
<br>
JSR BuildMetaEnemy<br>
<br>
JMP SpriteDone<br>
NT0:<br>
LDA enemiesposy,y<br>
STA $0224,x<br>
LDA enemiesposx,y<br>
SEC<br>
SBC scroll<br>
CMP enemiesposx,y<br>
BCS HideSprite<br>
.keepon<br>
STA $0227,x<br>
JSR BuildMetaEnemy<br>
JMP SpriteDone<br>
HideSprite:<br>
LDA #$F0<br>
STA $0224,x<br>
STA $0227,x<br>
JSR BuildMetaEnemy<br>
SpriteDone:<br>
LDA $022B,x<br>
CMP #$08<br>
BCS NoHide<br>
LDA #$F0<br>
STA $0228,x<br>
STA $0230,x<br>
NoHide:<br>
<br>
LDA enemiesposx,y<br>
BEQ SetNT1<br>
JMP NTCheckDone<br>
SetNT1:<br>
LDA enemiesnametable,y<br>
BNE SetNT0<br>
LDA #$01<br>
STA enemiesnametable,y<br>
JMP NTCheckDone<br>
SetNT0:<br>
LDA #$00<br>
STA enemiesnametable,y<br>
NTCheckDone:<br>
<br>
TXA<br>
CLC<br>
ADC #$10<br>
TAX<br>
INY<br>
CPY #$04<br>
BEQ .endsprpos<br>
JMP SpritesPosLoop<br>
.endsprpos
				</div><div class="mdl-card--border"></div>