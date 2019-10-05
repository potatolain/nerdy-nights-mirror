<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 27, 2017 at 11:50:14 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Mega Mario Man</b></i><br>
<br>
Just have the sprite move more pixels per frame.<br>
<br>
If your character is moving 1 pixel per frame, increment the missile to move 2 pixels per frame.<br>
<br>
Example for:<br>
Character<br>
LDA $0200<br>
CLC<br>
ADC #$01<br>
STA $0200<br>
<br>
Missile:<br>
LDA $0210<br>
CLC<br>
ADC #$02 ;Twice as fast<br>
STA $0210</div>
<br>
<br>
To build on this, you can use a variable and change the speed of the missile before moving it x or y pixels per frame.<br>
<br>
;In Variables Area<br>
MissileSpeed&#xA0;&#xA0;&#xA0; .rs 1<br>
<br>
;Changing Missile speed in code for whatever reason<br>
LDA #$02&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;You can load this with whatever number you want based on things<br>
STA MissileSpeed<br>
<br>
;Adjusting the speed of the missile (assuming $0210 is the direction the missile is moving)<br>
LDA $0210<br>
CLC<br>
ADC MissileSpeed&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Move sprite this many pixels<br>
STA $0210<br>
<br>
<br>
<strong>2x Character Speed</strong><br>
If you want the missile to be twice as fast as the character, you can do this.<br>
<br>
;In Variables Area<br>
CharacterSpeed&#xA0;&#xA0;&#xA0; .rs 1<br>
MissileSpeed&#xA0;&#xA0;&#xA0; .rs 1<br>
<br>
;Changing Missile speed in code for whatever reason<br>
LDA CharacterSpeed&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Current number of pixel per frame the character is moving<br>
CLC<br>
ADC CharacterSpeed&#xA0;<br>
STA MissileSpeed&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;CharacterSpeed + CharacterSpeed = MissileSpeed<br>
<br>
;Adjusting the speed of the missile (assuming $0210 is the direction the missile is moving)<br>
LDA $0210<br>
CLC<br>
ADC MissileSpeed&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;Move sprite this many pixels<br>
STA $0210
				</div><div class="mdl-card--border"></div>