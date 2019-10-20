<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Jan 22, 2014 at 7:37:26 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<p>
	This is a problem that I skipped over a while ago in order to focus on getting a single room to work, but now I&#xA0;would like&#xA0;to have more than one room actually functional&#xA0;(think <i>Adventure</i> for the 2600, or any overhead action-adventure). I have different backgrounds, attributes, and palettes loading, but the question is: how to get different sprites for different rooms, while keeping the location of the hero sprite dependent on player input. If a looped sprite table is used, as found in the NN tutorials, the hero&#x2019;s position understandably jumps to whatever location it is assigned in the table. If a routine similar to the UpdateSprites routine in NN Week 9 is used in place of this, and in combination with a routine that sets the initial position of the hero (similar to the &quot;update ball stats here&quot; section near the beginning of NN Week 9), hero movement is fluid, but all addresses must be individually declared. Further, all sprite locations ($0200, $0201, etc.) must first have a variable assigned to them (herox, heroy, etc.), creating a ton of extra variables that may or may not be needed. This becomes more confusing when the whole SPRITE_ constant system is used, since herox, heroy, etc. can all be replaced with SPRITE_ and function just fine. What exactly needs to be done when loading a new room to ensure that the hero&#x2019;s location is kept, and that new enemy sprites are loaded? Should some sort of routine that stores and loads the hero&#x2019;s last location be used? The looped table is really appealing, but it also seems to be fairly rigid when it comes to moving beyond single screen games (although I am hopefully just using it wrong). Do there need to be long lists of Update____ for each room (i.e. UpdateEneniesRoom1, UpdateEnemiesRoom2, etc.)? Any help would be greatly appreciated, and if this does not make sense just ask. I am guessing that this is a fairly easy problem, but something is wrong in my logic (brain or computer). I am more than ready to start playing around with sprites, but have been hung up on this problem for a while.</p>
<p>
	&#x3000;</p>
<p>
	Examples of the three systems discussed above:<br>
	&#xA0;</p>
<p style="margin-left: 40px;">
	Room1spr:&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Table, there would be one of these for each room, or one at the</p>
<p style="margin-left: 40px;">
	;vert tile attr horiz&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; beginning of the playing state?</p>
<p style="margin-left: 40px;">
	.db $C0, $00, $00, $70 ;Hero</p>
<p style="margin-left: 40px;">
	.db $FE, $FE, $00, $FE</p>
<p>
	<br>
	or</p>
<p>
	&#xA0;</p>
<p style="margin-left: 40px;">
	UpdateHeroSprite:</p>
<p style="margin-left: 40px;">
	LDA HeroY ;;update all hero sprite info</p>
<p style="margin-left: 40px;">
	STA $0200</p>
<p style="margin-left: 40px;">
	LDA #$00</p>
<p style="margin-left: 40px;">
	STA $0201</p>
<p style="margin-left: 40px;">
	LDA #$00</p>
<p style="margin-left: 40px;">
	STA $0202</p>
<p style="margin-left: 40px;">
	LDA HeroX</p>
<p style="margin-left: 40px;">
	STA $0203</p>
<p style="margin-left: 40px;">
	RTS</p>
<p>
	<br>
	In conjunction with:</p>
<p>
	&#xA0;</p>
<p style="margin-left: 40px;">
	SetInitialHeroLocation: ; Only used once at the beginning of the Playing State</p>
<p style="margin-left: 40px;">
	LDA #$C0</p>
<p style="margin-left: 40px;">
	STA HeroY</p>
<p style="margin-left: 40px;">
	LDA #$20</p>
<p style="margin-left: 40px;">
	STA HeroX</p>
<p style="margin-left: 40px;">
	LDA #$01</p>
<p style="margin-left: 40px;">
	STA InitialState</p>
<p style="margin-left: 40px;">
	.Done</p>
<p style="margin-left: 40px;">
	RTS</p>
				</div><div class="mdl-card--border"></div>