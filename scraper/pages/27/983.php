<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Dec 12, 2017 at 8:27:33 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Use EnemyNumber to find the EnemyType and then get the data you need from the table. Then store it to useful variables or temporary ones to execute what you need. In my loading routines I have tables for Types, and then load those up before hand. These Types are used for movement, tile data, and other things.<br>
<br>
LoadingTypeData:<br>
&#xA0; .db $00,$00,$01,$03<br>
<br>
LoadTypeData:<br>
&#xA0; LDX #$00 ; X is going to be EnemyNumber<br>
.LoadingLoop<br>
&#xA0; LDA EnemyNumber, X<br>
&#xA0; ASL A<br>
&#xA0; TAY<br>
&#xA0; LDA LoadingTypeData, Y<br>
&#xA0; STA PTR1<br>
&#xA0; INY<br>
&#xA0; LDA LoadingTypeData, Y<br>
&#xA0; STA PTR1+1<br>
<br>
&#xA0; LDY #$00<br>
&#xA0; LDA [PTR1], Y<br>
&#xA0; STA EnemyType, X&#xA0; &#xA0; &#xA0; ; Store at one of your EnemyType variables that will be used for other things<br>
<br>
&#xA0; INX<br>
&#xA0; CPX #$04 ; Load your four enemies<br>
&#xA0; BNE .LoadingLoop<br>
&#xA0; RTS<br>
<br>
Then in your main program you&apos;d run what you need based on the Type variable. Hopefully that helps? I have gotten tripped up on it all before, having to store things at different places and all. I think what confused me was the step of pre-loading the data. You have to have the Type, but you need to load it before you need it. And, you only need to load it once if you do it with your room loading routines. I suppose you could find it every frame, but... <span class="sprites_emoticons absmiddle" id="emo_smile">&#xA0;</span>.<br>
<br>
Again, hopefully that helps. It has been a while since I have gotten to write any code so it might be a bit off.<br>
<br>
				</div><div class="mdl-card--border"></div>