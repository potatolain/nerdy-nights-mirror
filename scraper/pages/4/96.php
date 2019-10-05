<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 27, 2017 at 4:03:12 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Piputkin3</b></i><br>
<br>
I will ask another question, can you determine the sprite rate of less than 1?</div>
<br>
Yes. Instead of moving 1 pixel per frame, you move 1 pixel every other frame, every third frame, etc. However slow you want it to go.<br>
<br>
The way I would tackle this by using a counter variable to skip frames.<br>
<br>
;Variables<br>
MissileSpeedCounter&#xA0;&#xA0; .rs 1<br>
<br>
;Code to Move Missile<br>
INC MissileSpeedCounter&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
LDA MissileSpeedCounter<br>
CMP #$02 &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Adjust this value depending on how many frames you want to skip, here I&apos;m going every other frame. You can use a variable here if you want different speeds<br>
BNE .SkipMoveMissile&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Skip moving the missile this frame if not equal to #$02<br>
&#xA0;&#xA0;&#xA0;&#xA0; LDA $0210<br>
&#xA0;&#xA0;&#xA0;&#xA0; CLC<br>
&#xA0;&#xA0;&#xA0;&#xA0; ADC #$01<br>
&#xA0;&#xA0;&#xA0;&#xA0; STA $0210&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Move Missile 1 pixel<br>
&#xA0;&#xA0;&#xA0;&#xA0;<br>
&#xA0;&#xA0;&#xA0;&#xA0; LDA #$00<br>
&#xA0;&#xA0;&#xA0;&#xA0; STA MissileSpeedCounter&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Reset counter back to #$00<br>
.SkipMoveMissile :<br>
<br>
<br>
<br>
&#xA0;
				</div><div class="mdl-card--border"></div>