<div class="mdl-card__title"><strong>LucasWeatherby</strong> posted on 
		
			
				
				Apr 2, 2013 at 12:42:58 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div>
	Ok, I know I&apos;m the most sporatic visitor to this page but whatever. &#xA0;I still do try when I have the time.<br>
	<br>
	<div class="FTQUOTE" style="width: 1011.21533203125px; font-size: 12.222222328186035px;">
		<i>Originally sent by:&#xA0;<b>3GenGames</b></i><br>
		<br>
		Yeah, you have to set $2000 and $2005 each frame. Writing to $2006 basically rewrites the scroll because of how the PPU reuses some bits, so after you do $2006 write, you HAVE to rewrite $2000 (Nametable selection/NMI enable) and then the 2x $2005 writes, or else the scroll will be wrong.</div>
	3Gen gave me some advice, but I am pretty sure I have done this as you can see in the code snippets below:<br style="font-size: 12.222222328186035px;">
	<br>
	Hmmm...Ive tried uploading my code in an attached file but NA seems to be having some problems with that. So I will paste the important parts:</div>
<div>
	<br>
	<br>
	[This is the NMI Section]<br>
	<div class="FTQUOTE" style="width: 1011.21533203125px; font-size: 12.222222328186035px;">
		<div>
			NMI:</div>
		<div>
			&#xA0; LDA #$00</div>
		<div>
			&#xA0; STA $2003 &#xA0; &#xA0; &#xA0; ; set the low byte (00) of the RAM address</div>
		<div>
			&#xA0; LDA #$02</div>
		<div>
			&#xA0; STA $4014 &#xA0; &#xA0; &#xA0; ; set the high byte (02) of the RAM address, start the transfer</div>
		<div>
			&#xA0;</div>
		<div>
			&#xA0; JSR DrawScore</div>
		<div>
			&#xA0;</div>
		<div>
			&#xA0; ;;This is the PPU clean up section, so rendering the next frame starts properly.</div>
		<div>
			&#xA0; LDA #%10010000 &#xA0; ; enable NMI, sprites from Pattern Table 0, background from Pattern Table 1</div>
		<div>
			&#xA0; STA $2000</div>
		<div>
			&#xA0; LDA #%00011110 &#xA0; ; enable sprites, enable background, no clipping on left side</div>
		<div>
			&#xA0; STA $2001</div>
		<div>
			&#xA0; LDA #$00 &#xA0; &#xA0; &#xA0; &#xA0;;;tell the ppu there is no background scrolling</div>
		<div>
			&#xA0; STA $2005</div>
		<div>
			&#xA0; STA $2005</div>
		<div>
			&#xA0; &#xA0;&#xA0;</div>
		<div>
			&#xA0; ;;;all graphics updates done by here, run game engine</div>
		<div>
			&#xA0;</div>
		<div>
			&#xA0;</div>
		<div>
			&#xA0; JSR ReadController1 &#xA0;;;get the current button data for player 1</div>
		<div>
			&#xA0; JSR ReadController2 &#xA0;;;get the current button data for player 2</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			GameEngine: &#xA0;</div>
		<div>
			&#xA0; LDA gamestate</div>
		<div>
			&#xA0; CMP #STATETITLE</div>
		<div>
			&#xA0; BEQ EngineTitle &#xA0; &#xA0;;;game is displaying title screen</div>
		<div>
			&#xA0; &#xA0;&#xA0;</div>
		<div>
			&#xA0; LDA gamestate</div>
		<div>
			&#xA0; CMP #STATEGAMEOVER</div>
		<div>
			&#xA0; BEQ EngineGameOver &#xA0;;;game is displaying ending screen</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0; LDA gamestate</div>
		<div>
			&#xA0; CMP #STATEPLAYING</div>
		<div>
			&#xA0; BEQ EnginePlaying &#xA0; ;;game is playing</div>
		<div>
			GameEngineDone: &#xA0;</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0; JSR UpdateSprites &#xA0;;;set ball/paddle sprites from positions</div>
		<div>
			&#xA0; RTI &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; return from interrupt</div>
	</div>
</div>
<br>
[Now Here is the DrawScore Subroutine]<br>
<br>
<br>
<div>
	<div class="FTQUOTE" style="width: 1011.21533203125px; font-size: 12.222222328186035px;">
		<div>
			DrawScore:</div>
		<div>
			&#xA0; ;;;;;;;;;;;What I originally tried</div>
		<div>
			&#xA0; ;LDX #$01 &#xA0; &#xA0; &#xA0;&#xA0;</div>
		<div>
			&#xA0; ;LDA ScoreDigitTiles, x &#xA0; &#xA0; &#xA0; &#xA0;; load data from address (palette + the value in x)</div>
		<div>
			&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; 1st time through loop it will load palette+0</div>
		<div>
			&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; 2nd time through loop it will load palette+1</div>
		<div>
			&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; 3rd time through loop it will load palette+2</div>
		<div>
			&#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; etc</div>
		<div>
			&#xA0; ;STA $2007 &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; &#xA0; ; write to PPU</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0; ;;;;;;;;;;;END OF What I originally tried</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0; ;hardcode to set the scores</div>
		<div>
			&#xA0; LDA #$01</div>
		<div>
			&#xA0; STA score1;set player 1 score to 1</div>
		<div>
			&#xA0; STA score2;set player 2 score to 1</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0; ;3gengames method</div>
		<div>
			&#xA0; LDA #$20;Screen location for first digit of score</div>
		<div>
			&#xA0; STA $2006</div>
		<div>
			&#xA0; LDA #$4E;Location. Locations $204F and $2050 are both going to be either blank, or a DASH to seperate the digits</div>
		<div>
			&#xA0; LDX score1</div>
		<div>
			&#xA0; LDA ScoreDigitTiles,X</div>
		<div>
			&#xA0; STA $2007 ;Store to 1st character to screen.</div>
		<div>
			&#xA0; LDA $2007&#xA0;</div>
		<div>
			&#xA0; LDA $2007;Move 2 bytes of the screen location.</div>
		<div>
			&#xA0; LDX score2</div>
		<div>
			&#xA0; LDA ScoreDigitTiles,X</div>
		<div>
			&#xA0; STA $2007 ;Store 2nd character to screen.</div>
		<div>
			&#xA0;&#xA0;</div>
		<div>
			&#xA0; RTS</div>
	</div>
</div>
<br>
<br>
<div>
	&#xA0;</div>
<div>
	<br>
	[Finally, here is the tile loading stuff]<br>
	<br>
	<br>
	<div>
		<div class="FTQUOTE" style="width: 1011.21533203125px; font-size: 12.222222328186035px;">
			<br>
			<div>
				<div>
					ScoreDigitTiles:</div>
				<div>
					&#xA0; .db $00,$01,$02,$03,<span class="Apple-tab-span" style="white-space: pre;"> </span>$22,$36,$17,$0F, &#xA0;$22,$30,$21,$0F, &#xA0;$22,$27,$17,$0F &#xA0; ;</div>
			</div>
			<div>
				&#xA0;</div>
		</div>
	</div>
	<div>
		&#xA0;</div>
</div>
I am at a loss for why my score still shows up in the same place as the picture I posted above. I feel like I&apos;ve reset the scrolling correctly. If anyone has any idea please let me know.
				</div><div class="mdl-card--border"></div>