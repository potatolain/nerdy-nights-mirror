<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 9, 2014 at 11:30:53 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I cannot for the life of me figure out sprites. I can write the code to load the initial sprites, that&apos;s easy. What I can&apos;t figure out is how to get more to load during game play (Push a button and sprite appears) or make them go away during game play (Push a button and the sprite is gone).&#xA0; Essentially, my sprites don&apos;t move, they are just replaced by other sprites. So, here is an example below (not my actual code, but I want to make my code do this):<br>
<br>
<strong>Here is what I want my code to do:</strong><br>
-Initially Load sprite1 and sprite4 (I can do this)<br>
-Press and hold Button A - sprite1 changes to sprite2 (and sprite2 changes to another and this continues until you get to the last sprite or release A, to keep it simple, I am just stopping at sprite2) AND<br>
sprite3 changes to sprite4<br>
<br>
<br>
-Release Button A - first set of sprites (sprite1 and sprite2) stop changing AND sprite4 changes back to sprite3<br>
-Press Button B - sprite2 changes back to sprite1<br>
<br>
So, basically, I want to push a button and make a sprite leave the screen and make a different sprite load on the screen in the exact same location. Sprites 1 and 2 are beer mugs and sprites 3 and 4 are the tap handle. Press Button A, fill mug (series of 7 sprites) and tap the handle. Let go of A, mug stops filling and handle go back to the up position. Press B, a new empty mug loads.<br>
<br>
<strong>Example Code:</strong><br>
;;Initial Sprite Load<br>
LoadSprite1:<br>
&#xA0; LDX #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start at 0<br>
.Loop:<br>
&#xA0; LDA sprites1, x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (sprites +&#xA0; x)<br>
&#xA0; STA $0200, x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; store into RAM address ($0200 + x)<br>
&#xA0; INX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; X = X + 1<br>
&#xA0; CPX #$10&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare X to hex $10<br>
&#xA0; BNE .Loop&#xA0;&#xA0; ; Branch to LoadSpritesLoop if compare was Not Equal to zero<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
<br>
LoadSprite3:<br>
&#xA0; LDX #$00&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; start at 0<br>
.Loop:<br>
&#xA0; LDA sprites2, x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; load data from address (sprites +&#xA0; x)<br>
&#xA0; STA $0220, x&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; store into RAM address ($0220 + x)<br>
&#xA0; INX&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; X = X + 1<br>
&#xA0; CPX #$08&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; Compare X to hex $08<br>
&#xA0; BNE .Loop&#xA0;&#xA0; ; Branch to LoadSpritesLoop if compare was Not Equal to zero<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;<br>
<br>
<br>
sprite1: ;empty mug<br>
&#xA0;&#xA0;&#xA0;&#xA0; ;vert tile attr horiz<br>
&#xA0; .db $80, $00, $00, $90&#xA0;&#xA0; ;tile 0<br>
&#xA0; .db $80, $01, $00, $98&#xA0;&#xA0; ;tile 1<br>
&#xA0; .db $88, $02, $00, $90&#xA0;&#xA0; ;tile 2<br>
&#xA0; .db $88, $03, $00, $98&#xA0;&#xA0; ;tile 3<br>
<br>
sprite2: ;start to fill mug<br>
&#xA0;&#xA0;&#xA0;&#xA0; ;vert tile attr horiz<br>
&#xA0; .db $80, $04, $00, $90&#xA0;&#xA0; ;tile 4<br>
&#xA0; .db $80, $05, $00, $98&#xA0;&#xA0; ;tile 5<br>
&#xA0; .db $88, $06, $00, $90&#xA0;&#xA0; ;tile 6<br>
&#xA0; .db $88, $07, $00, $98&#xA0;&#xA0; ;tile 7<br>
<br>
sprite3: ;handle not tapped<br>
&#xA0;&#xA0;&#xA0;&#xA0; ;vert tile attr horiz<br>
&#xA0; .db $60, $08, $00, $90&#xA0;&#xA0; ;tile 8<br>
&#xA0; .db $68, $09, $00, $90&#xA0;&#xA0; ;tile 9<br>
<br>
<br>
sprite4: ;tapped handle<br>
&#xA0;&#xA0;&#xA0;&#xA0; ;vert tile attr horiz<br>
&#xA0; .db $60, $0A, $00, $90&#xA0;&#xA0; ;tile 10<br>
&#xA0; .db $68, $0B, $00, $90&#xA0;&#xA0; ;tile 11<br>
&#xA0; .db $60, $0C, $00, $88&#xA0;&#xA0; ;tile 12<br>
&#xA0; .db $68, $0D, $00, $88&#xA0;&#xA0; ;tile 13<br>
<br>
<br>
***NOTE*** The code I listed is just an example, so it proably has errors in the logic. I can fix that. I am just confused on process.<br>
<br>
Sorry if my question isn&apos;t clear, I&apos;m just so confused, I really don&apos;t even know how to ask what I&apos;m trying to do.
				</div><div class="mdl-card--border"></div>