<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Oct 24, 2009 at 12:54:59 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I can send it, but I&apos;m pretty sure it has to do with my code. I had problems with it in the last sound engine. I set the current song and jsr sound_load in my gamestate, but I don&apos;t sound_init till a certain spot in the animation(which is in a whole other function). The song works, cause I can run it on the title screen instead of a sound effect. If you don&apos;t find anything, I&apos;ll go look at my build right before this one and see.
<br>
<br>It&apos;s the only way I could get it to start when I wanted it to before, without a constant tone playing before the sound before.
<br>
<br>Here&apos;s the engine, it&apos;s pretty much just checking for the start of the &quot;homebrew animation&quot; which is the cue to load the song. after that it&apos;s just a delay after games pops up before going to the title screen.
<br>
<br>EngineSplash:
<br>  LDA rowcount
<br>  CMP #$01
<br>  BCS godelay
<br>  <span style="color: rgb(255, 0, 0); font-weight: bold;">LDA #$02
</span><br style="color: rgb(255, 0, 0); font-weight: bold;"><span style="color: rgb(255, 0, 0); font-weight: bold;">  STA current_song
</span><br style="color: rgb(255, 0, 0); font-weight: bold;"><span style="color: rgb(255, 0, 0); font-weight: bold;">  JSR sound_load
</span><br>godelay:
<br>  LDA game2
<br>  CMP #$9F
<br>  BEQ INCdelay
<br>  JMP GameEngineDone
<br>INCdelay:
<br>  INC delaycount
<br>  LDA delaycount
<br>  CMP #$40
<br>  BEQ loadgame
<br>  JMP GameEngineDone
<br>loadgame:
<br>  JSR ClrSprites
<br>  JSR sound_disable
<br>  LDA #BGTITLE
<br>  STA BG_ptr
<br>  STA ATT_ptr
<br>  JSR loadbackground
<br>  JSR loadattribute
<br>  JSR LoadTitle
<br>  JMP GameEngineDone
<br>
<br>here&apos;s the actual hackish animation for the splash page. no laughing at my ugly code <img src="i/expressions/face-icon-small-smile.gif" border="0" style="display: none;"> note the JSR sound_init is right when the first sprites of the &quot;H&quot; are suppose to move into place.
<br>
<br>splashanim:
<br>
<br>  LDA beerpnt
<br>  CMP #$04
<br>  BNE INCbeer
<br>  JMP Homebrew
<br>
<br>INCbeer:
<br>  INC beercount
<br>  LDA beercount
<br>  CMP #$20
<br>  BEQ beer1
<br>  JMP beerover
<br>beer1:
<br>  LDA beerpnt
<br>  CMP #$00
<br>  BNE beer2
<br>
<br>  LoadPalettesbeer:
<br>  LDA $2002             ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006             ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $3F00 address
<br>  LDX #$00              ; start out at 0
<br>LoadPalettesbeerLoop:
<br>  LDA palettebeer, x        ; load data from address (palette + the value in x)
<br>                          ; 1st time through loop it will load palette+0
<br>                          ; 2nd time through loop it will load palette+1
<br>                          ; 3rd time through loop it will load palette+2
<br>                          ; etc
<br>  STA $2007             ; write to PPU
<br>  INX                   ; X = X + 1
<br>  CPX #$20              ; Compare X to hex $20, decimal 32 - copying 32 bytes = 8 palettes
<br>  BNE LoadPalettesbeerLoop  ; Branch to LoadPalettesLoop if compare was Not Equal to zero
<br>                        ; if compare was equal to 32, keep going down
<br>
<br>  LDA beerpnt
<br>  CLC
<br>  ADC #$01
<br>  STA beerpnt
<br>  LDA #$00
<br>  STA beercount
<br>  JMP beerover
<br>beer2:
<br>  LDA beerpnt
<br>  CMP #$01
<br>  BNE beer3
<br>
<br>  LoadPalettesbeer2:
<br>  LDA $2002             ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006             ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $3F00 address
<br>  LDX #$00              ; start out at 0
<br>LoadPalettesbeer2Loop:
<br>  LDA palettebeer2, x        ; load data from address (palette + the value in x)
<br>                          ; 1st time through loop it will load palette+0
<br>                          ; 2nd time through loop it will load palette+1
<br>                          ; 3rd time through loop it will load palette+2
<br>                          ; etc
<br>  STA $2007             ; write to PPU
<br>  INX                   ; X = X + 1
<br>  CPX #$20              ; Compare X to hex $20, decimal 32 - copying 32 bytes = 8 palettes
<br>  BNE LoadPalettesbeer2Loop  ; Branch to LoadPalettesLoop if compare was Not Equal to zero
<br>                        ; if compare was equal to 32, keep going down
<br>
<br>  LDA beerpnt
<br>  CLC
<br>  ADC #$01
<br>  STA beerpnt
<br>  LDA #$00
<br>  STA beercount
<br>  JMP beerover
<br>beer3:
<br>  LDA beerpnt
<br>  CMP #$02
<br>  BNE beer4
<br>
<br>  LoadPalettesbeer3:
<br>  LDA $2002             ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006             ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $3F00 address
<br>  LDX #$00              ; start out at 0
<br>LoadPalettesbeer3Loop:
<br>  LDA palettebeer3, x        ; load data from address (palette + the value in x)
<br>                          ; 1st time through loop it will load palette+0
<br>                          ; 2nd time through loop it will load palette+1
<br>                          ; 3rd time through loop it will load palette+2
<br>                          ; etc
<br>  STA $2007             ; write to PPU
<br>  INX                   ; X = X + 1
<br>  CPX #$20              ; Compare X to hex $20, decimal 32 - copying 32 bytes = 8 palettes
<br>  BNE LoadPalettesbeer3Loop  ; Branch to LoadPalettesLoop if compare was Not Equal to zero
<br>                        ; if compare was equal to 32, keep going down
<br>
<br>  LDA beerpnt
<br>  CLC
<br>  ADC #$01
<br>  STA beerpnt
<br>  LDA #$00
<br>  STA beercount
<br>  JMP beerover
<br>beer4:
<br>
<br>  LDA beerpnt
<br>  CMP #$03
<br>  BNE beerover
<br>
<br>  LoadPalettesbeer4:
<br>  LDA $2002             ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006             ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $3F00 address
<br>  LDX #$00              ; start out at 0
<br>LoadPalettesbeer4Loop:
<br>  LDA palettebeer4, x        ; load data from address (palette + the value in x)
<br>                          ; 1st time through loop it will load palette+0
<br>                          ; 2nd time through loop it will load palette+1
<br>                          ; 3rd time through loop it will load palette+2
<br>                          ; etc
<br>  STA $2007             ; write to PPU
<br>  INX                   ; X = X + 1
<br>  CPX #$20              ; Compare X to hex $20, decimal 32 - copying 32 bytes = 8 palettes
<br>  BNE LoadPalettesbeer4Loop  ; Branch to LoadPalettesLoop if compare was Not Equal to zero
<br>                        ; if compare was equal to 32, keep going down
<br>
<br>  LDA #$04
<br>  STA beerpnt
<br>  LDA #$00
<br>  STA beercount
<br>
<br>beerover:
<br>  RTS
<br>
<br>Homebrew:
<br>  
<br>  LDA rowcount
<br>  CMP #$0C
<br>  BNE INChomebrew
<br>  JMP Games
<br>
<br>INChomebrew:
<br>  
<br>  INC homebrewcount
<br>  LDA homebrewcount
<br>  CMP #$08
<br>  BEQ loadrow1
<br>  JMP hbover
<br>loadrow1:
<br>  LDA rowcount
<br>  CMP #$00
<br>  BNE loadrow2
<br>
<br>  <span style="font-weight: bold; color: rgb(255, 0, 0);">JSR sound_init
</span><br>  LDA #$5F
<br>  STA hone1
<br>  LDA #$67
<br>  STA hone2
<br>
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow2:
<br>  LDA rowcount
<br>  CMP #$01
<br>  BNE loadrow3
<br>
<br>  LDA #$57
<br>  STA htwo1
<br>  LDA #$5F
<br>  STA htwo2
<br>  LDA #$67
<br>  STA htwo3
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow3:
<br>  LDA rowcount
<br>  CMP #$02
<br>  BNE loadrow4
<br>
<br>  LDA #$4F
<br>  STA hthree1
<br>  LDA #$57
<br>  STA hthree2
<br>  LDA #$5F
<br>  STA hthree3
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow4:
<br>  LDA rowcount
<br>  CMP #$03
<br>  BNE loadrow5
<br>
<br>  LDA #$4F
<br>  STA hfour1
<br>  LDA #$57
<br>  STA hfour2
<br>  LDA #$5F
<br>  STA hfour3
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow5:
<br>  LDA rowcount
<br>  CMP #$04
<br>  BNE loadrow6
<br>
<br>  LDA #$4F
<br>  STA hfive1
<br>  LDA #$57
<br>  STA hfive2
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow6:
<br>  LDA rowcount
<br>  CMP #$05
<br>  BNE loadrow7
<br>
<br>  LDA #$4F
<br>  STA hsix1
<br>  LDA #$57
<br>  STA hsix2
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow7:
<br>  LDA rowcount
<br>  CMP #$06
<br>  BNE loadrow8
<br>
<br>  LDA #$4F
<br>  STA hseven1
<br>  LDA #$57
<br>  STA hseven2
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow8:
<br>  LDA rowcount
<br>  CMP #$07
<br>  BNE loadrow9
<br>
<br>  LDA #$4F
<br>  STA height1
<br>  LDA #$57
<br>  STA height2
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow9:
<br>  LDA rowcount
<br>  CMP #$08
<br>  BNE loadrow10
<br>
<br>  LDA #$4F
<br>  STA hnine1
<br>  LDA #$57
<br>  STA hnine2
<br>  LDA #$5F
<br>  STA hnine3
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow10:
<br>  LDA rowcount
<br>  CMP #$09
<br>  BNE loadrow11
<br>
<br>  LoadPalettes5S:
<br>  LDA $2002             ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006             ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $3F00 address
<br>  LDX #$00              ; start out at 0
<br>LoadPalettes5SLoop:
<br>  LDA palette5S, x        ; load data from address (palette + the value in x)
<br>                          ; 1st time through loop it will load palette+0
<br>                          ; 2nd time through loop it will load palette+1
<br>                          ; 3rd time through loop it will load palette+2
<br>                          ; etc
<br>  STA $2007             ; write to PPU
<br>  INX                   ; X = X + 1
<br>  CPX #$20              ; Compare X to hex $20, decimal 32 - copying 32 bytes = 8 palettes
<br>  BNE LoadPalettes5SLoop  ; Branch to LoadPalettesLoop if compare was Not Equal to zero
<br>                        ; if compare was equal to 32, keep going down
<br>
<br>  LDA #$5F
<br>  STA hten2
<br>
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow11:
<br>  LDA rowcount
<br>  CMP #$0A
<br>  BNE loadrow12
<br>
<br>  LoadPalettes6S:
<br>  LDA $2002             ; read PPU status to reset the high/low latch
<br>  LDA #$3F
<br>  STA $2006             ; write the high byte of $3F00 address
<br>  LDA #$00
<br>  STA $2006             ; write the low byte of $3F00 address
<br>  LDX #$00              ; start out at 0
<br>LoadPalettes6SLoop:
<br>  LDA palette6S, x        ; load data from address (palette + the value in x)
<br>                          ; 1st time through loop it will load palette+0
<br>                          ; 2nd time through loop it will load palette+1
<br>                          ; 3rd time through loop it will load palette+2
<br>                          ; etc
<br>  STA $2007             ; write to PPU
<br>  INX                   ; X = X + 1
<br>  CPX #$20              ; Compare X to hex $20, decimal 32 - copying 32 bytes = 8 palettes
<br>  BNE LoadPalettes6SLoop  ; Branch to LoadPalettesLoop if compare was Not Equal to zero
<br>                        ; if compare was equal to 32, keep going down
<br>
<br>  LDA #$5F
<br>  STA heleven2
<br>  LDA #$67
<br>  STA heleven3
<br>
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>loadrow12:
<br>  LDA rowcount
<br>  CMP #$0B
<br>  BNE hbover
<br>
<br>  LDA #$5F
<br>  STA htweleve1
<br>  LDA #$67
<br>  STA htweleve2
<br>
<br>  
<br>  LDA rowcount
<br>  CLC
<br>  ADC #$01
<br>  STA rowcount
<br>  LDA #$00
<br>  STA homebrewcount
<br>  JMP hbover
<br>hbover:
<br>
<br>  RTS
<br>
<br>Games:
<br>
<br>  INC gamecount
<br>  LDA gamecount
<br>  CMP #$20
<br>  BNE gamesdone
<br>  LDA #$97
<br>  STA game1
<br>  LDA #$9F
<br>  STA game2
<br>gamesdone:
<br>
<br>  RTS
<br>
<br>
<br>
<br>
<br>
				</div><div class="mdl-card--border"></div>