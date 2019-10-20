<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Aug 16, 2014 at 6:12:20 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Well, I&apos;ve had a lot of trouble understanding how to get sprites working (well at least), and the time has come to fill in the gaps. All of my previous questions on the subject have suffered from some fundamental errors, but I think that I am on the right track. One of the biggest areas that I have misunderstood occurs between weeks 6 and 7 of the Nerdy Nights. In week 6 sprites are loaded like this:
<br>
<br>
<br>LoadSprites:
<br>  LDX #$00              ; start at 0
<br>LoadSpritesLoop:
<br>  LDA sprites, x        ; load data from address (sprites +  x)
<br>  STA $0200, x          ; store into RAM address ($0200 + x)
<br>  INX                   ; X = X + 1
<br>  CPX #$10              ; Compare X to hex $10, decimal 16
<br>  BNE LoadSpritesLoop   ; Branch to LoadSpritesLoop if compare was Not Equal to zero
<br>                        ; if compare was equal to 16, keep going down
<br>             
<br>
<br>sprites:
<br>     ;vert tile attr horiz
<br>  .db $80, $32, $00, $80   ;sprite 0
<br>  .db $80, $33, $00, $88   ;sprite 1
<br>  .db $88, $34, $00, $80   ;sprite 2
<br>  .db $88, $35, $00, $88   ;sprite 3
<br>
<br>
<br>
<br>The next lesson, however, loads them as follows:
<br>
<br>
<br>UpdateSprites:
<br>  LDA bally  ;;update all ball sprite info
<br>  STA $0200
<br>  
<br>  LDA #$30
<br>  STA $0201
<br>  
<br>  LDA #$00
<br>  STA $0202
<br>  
<br>  LDA ballx
<br>  STA $0203
<br>  
<br>  ;;update paddle sprites
<br>  RTS
<br>
<br>
<br>
<br>Both routines are loading values into $0200 and the following addresses, but they do so in different ways. The first loads static values, whereas the second loads variables that are being updated elsewhere in the program. This second method, though, accomplishes its updates though the slow, painful, and redundant process of updating the value at each address by itself. Gone is that handy pointer table from the week before. Is there a way to load the updateable data found in week 7 (bally, ballx,) into the program using some sort of loop or pointer that copies information stored in a table (or table-like array)? For the sake of this question, let&apos;s say that I just want to update this for a single sprite. I&apos;m trying to isolate and distill what is actually going on with all of this before really trying to figure out MRN&apos;s lesson on the subject. At the moment I have things up and running for the hero and weapons, using metasprites and all, but when I start to look ahead to doing enemies it seems like it would be really unrealistic to have these long lists like in week 7 for every room. Thanks for any help! I&apos;m definitely ready to move past this problem...
				</div><div class="mdl-card--border"></div>