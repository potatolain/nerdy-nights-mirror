<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jan 22, 2014 at 9:41:05 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I basically have a table with the coordinates for the locations where my sprite (in this case, leisure suit larry) can be, depending on which room he&apos;s coming from:<br>
<br>
When I&apos;m leaving one room, I will assign a variable called ReturnFlag.&#xA0; This variable will have a value of #00,#01,#02, etc.&#xA0; Every two numbers is a set of coordinates.<br>
<br>
ReturnCoords:<br>
&#xA0; .db $FF,$FF,$FF,$FF,$FF,$FF,$FF,$FF ;title<br>
&#xA0; .db $FF,$FF,$FF,$FF,$FF,$FF,$FF,$FF ;credits<br>
&#xA0; .db $FF,$FF,$FF,$FF,$FF,$FF,$FF,$FF ;gameover<br>
&#xA0; .db $97,$78,$88,$78,$82,$D8,$FF,$FF ;bar (0=starting, 1=leaving bar, 2=dumpster)<br>
&#xA0; .db $AA,$78,$79,$47,$95,$CD,$FF,$FF ;inside bar (0=from outside, 1=drunk, 2=bouncer)<br>
&#xA0; .db $90,$78,$76,$99,$FF,$FF,$FF,$FF ;drunk dude (0=inside bar, 1=bathroom)<br>
&#xA0; .db $78,$5A,$FF,$FF,$FF,$FF,$FF,$FF ;bathroom<br>
&#xA0; .db $8C,$23,$4E,$A4,$FF,$FF,$FF,$FF ;bouncer (0=from inside bar, 1=from prostitute)<br>
&#xA0; .db $7C,$58,$8C,$CB,$FF,$FF,$FF,$FF ;prostitute (0=from bouncer, 1=from window)<br>
;;;;;;;;;;;;;;; etc etc<br>
<br>
Then I take that value to see where I need to place Larry, depending on what room I&apos;m in.&#xA0; I run this subroutine after my LoadSprites is finished, just so that everything else is in its proper place for whatever room it is, but then Larry is moved to his correct position only after that.<br>
<br>
PositionLarry:<br>
&#xA0; LDX BG_ptr&#xA0;&#xA0;&#xA0; ;set BG_ptr to X<br>
&#xA0; TXA&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;transfer to A<br>
&#xA0; ASL A&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;multiply by 2<br>
&#xA0; ASL A&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;x4<br>
&#xA0; ASL A&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;x8 (because I have 8 possible coordinates per room)<br>
&#xA0; TAX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;transfer back to X<br>
.Loop:<br>
&#xA0; LDA ReturnFlag&#xA0;&#xA0;&#xA0; ;then I load the variable ReturnFlag<br>
&#xA0; CMP #$00<br>
&#xA0; BEQ .Place&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;if it&apos;s #$00, just load the first two coordinates in a row<br>
&#xA0; INX<br>
&#xA0; INX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;increment by 2 to get the next two coordinates<br>
&#xA0; DEC ReturnFlag&#xA0; ;decrement ReturnFlag once and repeat this until return flag is 0.<br>
&#xA0; JMP .Loop<br>
.Place:<br>
&#xA0; LDA ReturnCoords,x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;position sprite to correct location.<br>
&#xA0; STA SPRITE_BANKV<br>
&#xA0; STA SPRITE_BANKV+4<br>
&#xA0; CLC<br>
&#xA0; ADC #$08<br>
&#xA0; STA SPRITE_BANKV+8<br>
&#xA0; STA SPRITE_BANKV+12<br>
&#xA0; CLC<br>
&#xA0; ADC #$08<br>
&#xA0; STA SPRITE_BANKV+16<br>
&#xA0; STA SPRITE_BANKV+20<br>
&#xA0; CLC<br>
&#xA0; ADC #$08<br>
&#xA0; STA SPRITE_BANKV+24<br>
&#xA0; STA SPRITE_BANKV+28<br>
&#xA0; INX<br>
&#xA0; LDA ReturnCoords,x<br>
&#xA0; STA SPRITE_BANK<br>
&#xA0; STA SPRITE_BANK+8<br>
&#xA0; STA SPRITE_BANK+16<br>
&#xA0; STA SPRITE_BANK+24<br>
&#xA0; CLC<br>
&#xA0; ADC #$08<br>
&#xA0; STA SPRITE_BANK+4<br>
&#xA0; STA SPRITE_BANK+12<br>
&#xA0; STA SPRITE_BANK+20<br>
&#xA0; STA SPRITE_BANK+28<br>
&#xA0; RTS
				</div><div class="mdl-card--border"></div>