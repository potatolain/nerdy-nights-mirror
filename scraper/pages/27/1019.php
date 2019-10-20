<div class="mdl-card__title"><strong>KHAN Games</strong> posted on 
		
			
				
				Jan 27 at 2:33:13 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					(Warning. No idea if this will actually work.) <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span><br>
<br>
tempx .rs 1<br>
tempyLo .rs 1<br>
tempyHi .rs 1<br>
<br>
GetTableOffset:<br>
&#xA0; LDA #&lt;(BG_COLL_DATA)<br>
&#xA0; STA collisionLo<br>
&#xA0; LDA #&gt;(BG_COLL_DATA)<br>
&#xA0; STA collisionHi<br>
<br>
&#xA0; LDA #$00<br>
&#xA0; STA tempx<br>
&#xA0; STA tempyLo<br>
&#xA0; STA tempyHi<br>
&#xA0; LDX room_pos_x<br>
&#xA0; LDY room_pos_y<br>
.LoopY:<br>
&#xA0; CPY #$00 ;decreases Y until it&apos;s 0, to find out the Y table offset<br>
&#xA0; BEQ .LoopX<br>
&#xA0; LDA tempyLo<br>
&#xA0; CLC<br>
&#xA0; ADC #$10<br>
&#xA0; STA tempyLo<br>
&#xA0; BNE .NoWrap<br>
&#xA0; INC tempyHi<br>
.NoWrap:<br>
&#xA0; DEY<br>
&#xA0; JMP .LoopY<br>
.LoopX:<br>
&#xA0; CPX #$00 ;decreases X until it&apos;s 0, to find out the X table offset<br>
&#xA0; BEQ .ExitLoop<br>
&#xA0; INC tempx<br>
&#xA0; DEX<br>
&#xA0; JMP .LoopX<br>
.ExitLoop:<br>
&#xA0; LDA tempx<br>
&#xA0; CLC<br>
&#xA0; ADC tempyLo<br>
&#xA0; CLC<br>
&#xA0; ADC collisionLo<br>
&#xA0; STA collisionLo<br>
&#xA0; LDA tempyHi<br>
&#xA0; CLC<br>
&#xA0; ADC collisionHi<br>
&#xA0; STA collisionHi<br>
<br>
&#xA0; LDY #$00<br>
&#xA0; LDA (collisionLo),y<br>
;;current value from table is now in A
				</div><div class="mdl-card--border"></div>