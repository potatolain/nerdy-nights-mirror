<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Feb 4, 2015 at 12:07:26 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Just to bring the question back around full circle, I will post the code on my solution to this from Happy Hour with comments. Maybe it will help others as well. I had the same issues SoleGoose had when I was trying to figure it out. I think MRN helped me through it. KHAN may have had a hand or two in it as well, I can&apos;t remember now.
<br>
<br> ;;;;;;;;;;;;;;;;;;;;;;;;
<br>SlideMug:                                     ;When B button is pressed, slide the mug to the right
<br>  LDA SlideMugFlag                   ;Hitting B will load 1 into this flag and kick off the routine
<br>  BEQ SlideMugDone
<br>    
<br>    LDA ReturnMugFlag              ;This for is for when the Mug is returning. Once it hits end of screen, the mug returns (slide left)
<br>    BNE SlideMugDone               ;I do this to skip the slide right part which is the next code
<br>
<br>
<br>    LDX MugPosition                    ;Start by finding the position of the mug and load it into X, I have it stored in this variable
<br>                                                        ;this is the coordinate on the screen where it is
<br> 
<br>    LDA mug_RAM+3       ; load sprite 0 X position                         ;This should look familiar, this is moving the four sprites of the mug to the RIGHT.
<br>    CLC             ; make sure the carry flag is clear
<br>    ADC SlideSpeed       ; A = A + 1
<br>    STA mug_RAM+3       ; save sprite 0 X position
<br>    
<br>    LDA mug_RAM+7        ; load sprite 1 X position
<br>    CLC             ; make sure the carry flag is clear
<br>    ADC SlideSpeed        ; A = A + 1
<br>    STA mug_RAM+7          ; save sprite 1 X position
<br>    
<br>    LDA mug_RAM+11          ; load sprite 2 X position
<br>    CLC             ; make sure the carry flag is clear
<br>    ADC SlideSpeed        ; A = A + 1
<br>    STA mug_RAM+11          ; save sprite 2 X position
<br>    
<br>    LDA mug_RAM+15          ; load sprite 3 X position
<br>    CLC             ; make sure the carry flag is clear
<br>    ADC SlideSpeed        ; A = A + 1
<br>    STA mug_RAM+15          ; save sprite 3 X position
<br>    
<br>    INX                                                                                                       ;Increment X (remember from above, X is loaded with MugPosition Variable
<br>    CMP #$FE            ;Mug stopping point                                          ;Now check to see if X is greater than #$FE (end of screen) (Load this as where you want the sprite to stop)
<br>    BCC SlideMugDone                                                                         ;If X is greater that #$FE (so #$FF), then routine is done.
<br>    
<br>;-------------------------------------------------------------------------------------------------------------------------------------------------------
<br>;Between these lines, I reset the Mug to Empty sprites and ready it to start sliding LEFT back to the Beer Tap
<br>      LDA #$00            ;Reset Mug to Empty
<br>      STA mug_RAM+1  
<br>      LDA #$01
<br>      STA mug_RAM+5
<br>      LDA #$02
<br>      STA mug_RAM+9  
<br>      LDA #$03
<br>      STA mug_RAM+13
<br> 
<br>      INC IncScoreFlag                ;Increment flag to add score.
<br>            
<br>      LDA #$00                        
<br>      STA MugCheckNotFillingFlag     ;Reset the Flag to show sprites not filling (enables color change)
<br>
<br>      INC RandomBeerFlag             ;Increment flag to run random generator to produce new beer order
<br> 
<br>      INC ReturnMugFlag
<br>      ;JSR ReturnMug
<br>;--------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
<br>  
<br>SlideMugDone:
<br>  RTS
<br>
<br>;;;;;;;;;;;;;;;;;;;;;;;;;;;;
<br> :Basically, this is the same as above, only the routine is now sliding the Mug to the LEFT
<br>ReturnMug:                                             ;Return the mug to it&apos;s starting position
<br>  LDA ReturnMugFlag
<br>  BEQ ReturnMugDone
<br>    LDX MugPosition
<br> 
<br>    LDA mug_RAM+3       ; load sprite 0 X position
<br>    SEC
<br>    SBC SlideSpeed      
<br>    STA mug_RAM+3       ; save sprite 0 X position
<br>    
<br>    LDA mug_RAM+7        ; load sprite 1 X position
<br>    SEC
<br>    SBC SlideSpeed      
<br>    STA mug_RAM+7          ; save sprite 1 X position
<br>    
<br>    LDA mug_RAM+11          ; load sprite 2 X position
<br>    SEC
<br>    SBC SlideSpeed      
<br>    STA mug_RAM+11          ; save sprite 2 X position
<br>    
<br>    LDA mug_RAM+15          ; load sprite 3 X position
<br>    SEC
<br>    SBC SlideSpeed      
<br>    STA mug_RAM+15          ; save sprite 3 X position
<br>    
<br>    DEX
<br>    CMP #$98
<br>    BNE ReturnMugDone
<br>      LDA #$00                        
<br>      STA MugCheckNotFillingFlag2    ;Reset the Flag to enable A Button
<br>      STA MugCheckCounter
<br>      STA SlideMugFlag
<br>      STA ReturnMugFlag
<br>      STA DoubleBonusFlag
<br>
<br>ReturnMugDone:
<br>  RTS 
<br>
<br>
<br>
<br>
<br>----------------------------------------------------------
<br>So, basically, here is what animates the sprites:
<br>
<br>
<br>    LDX MugPosition                    ;Start by finding the position of the mug and load it into X, I have it stored in this variable
<br>                                                        ;this is the coordinate on the screen where it is
<br>
<br>;Sprite data here
<br>
<br>    INX                                                                                                       ;Increment X (remember from above, X is loaded with MugPosition Variable
<br>    CMP #$FE            ;Mug stopping point                                          ;Now check to see if X is greater than #$FE (end of screen) (Load this as where you want the sprite to stop)
<br>    BCC SlideMugDone                                                                         ;If X is greater that #$FE (so #$FF or greater), then routine is done.
<br>
<br>
<br>You are just using a variable to hold the horizontal position on the screen (MugPosition) and comparing it to the horizontal stopping point (in this case #$FE). Well, actually, I am stopping at anything greater than #$FE. I did this because my MugSpeed variable is 2, so I increment by 2&apos;s instead of 1&apos;s, so I never actually hit #$FF. So, I know I always want to stop at anything greater than #$FF. If I had BNE here instead of BCC, my mug would slide right off the screen right side of the screen and start back at #$00 and reenter on the left side of the screen and just keep looping.
				</div><div class="mdl-card--border"></div>