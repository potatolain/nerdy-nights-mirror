<div class="mdl-card__title"><strong>glenn101</strong> posted on 
		
			
				
				Feb 18, 2012 at 2:25:06 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Hmm, I can get mario to move as a whole, but I get an additional sprite moving along at the top of the screen, it appears to be a duplicate of the first sprite. Any idea why this would happen? Here is my code to shift mario across:<br>
<br>
<br>
&#xA0;&#xA0;&#xA0;&#xA0; LDX $00<br>
ReadA:<br>
&#xA0;&#xA0;&#xA0;&#xA0; LDA $4016 ; player 1 - A<br>
&#xA0;&#xA0;&#xA0;&#xA0; AND #%00000001 ; only look at bit 0<br>
&#xA0;&#xA0;&#xA0;&#xA0; BEQ ReadADone ; branch to ReadADone if button is NOT pressed (0)<br>
; add instructions here to do something when button IS pressed (1)<br>
SpriteUpdateA<br>
&#xA0;&#xA0;&#xA0;&#xA0; LDA $0203,x ; load sprite X position with offset<br>
&#xA0;&#xA0;&#xA0;&#xA0; CLC ; make sure the carry flag is clear<br>
&#xA0;&#xA0;&#xA0;&#xA0; ADC #$01 ; A = A + 1<br>
&#xA0;&#xA0;&#xA0;&#xA0; STA $0203,x ; save sprite X position (sprite moves 1 unit right).<br>
&#xA0;&#xA0;&#xA0;&#xA0; INX<br>
&#xA0;&#xA0;&#xA0;&#xA0; INX<br>
&#xA0;&#xA0;&#xA0;&#xA0; INX<br>
&#xA0;&#xA0;&#xA0;&#xA0; INX<br>
&#xA0;&#xA0;&#xA0;&#xA0; CPX $10 ; When x=16 done all sprites.<br>
&#xA0;&#xA0;&#xA0;&#xA0; BNE SpriteUpdateA<br>
ReadADone: ; handling this button is done<br>
<br>
I do the exact same for moving left but I subtract of course <span class="sprites_emoticons absmiddle" id="emo_smile"></span> But the algorithm is the same.<br>
<br>
*Edit*<br>
I fixed it! ah damn syntax, I didn&apos;t put a &apos;#&quot; before $! But I&apos;m still curious as to why another mario sprite would appear?
				</div><div class="mdl-card--border"></div>