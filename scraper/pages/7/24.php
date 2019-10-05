<div class="mdl-card__title"><strong>themaincamarojoe</strong> posted on 
		
			
				
				Dec 17, 2009 at 12:41:51 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<p>How do you add the paddles?&#xA0; In previous post we used a loop to add more than one sprite:</p><p><font size="1">SpriteLoop:<br>&#xA0;LDA Sprites, x<br>&#xA0;STA $0200, x<br>&#xA0;INX<br>&#xA0;CPX #$10<br>&#xA0;BNE SpriteLoop</font></p><p>However, in this one asm file, we used this way:</p><p></p><p><font size="1">UpdateSprites:<br>&#xA0;LDA bally<br>&#xA0;STA $0200<br>&#xA0;<br>&#xA0;LDA #$75&#xA0; <font color="#00cc00">;i changed the the tile from 00 to 75 which is a ball looking&#xA0;tile</font><br>&#xA0;STA $0201<br>&#xA0;<br>&#xA0;LDA #$00<br>&#xA0;STA $0202<br>&#xA0;<br>&#xA0;LDA ballx<br>&#xA0;STA $0203<br>&#xA0;<br>&#xA0;RTS</font></p><p></p><p>When having more than one sprite, they were written to $0200.&#xA0; But when this one, and the first tutorial that uses sprite, when write to $0201.&#xA0; I guessed that any extra ones I would write to the next location, being $0204, but that did not work.&#xA0; Any ideas?</p><p>By the way, I&apos;m not new to programming (but i&apos;m not good at it), but I am new to nintentdo programming and the 6502.&#xA0; I do know a little bit about Intel assembly.</p>
				</div><div class="mdl-card--border"></div>