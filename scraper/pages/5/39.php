<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Feb 25, 2010 at 10:36:49 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<p>Here is an example of how to code the metasprite updates:</p><p>update_enemy1_sprites: <br>LDA sprite_vertical <br>STA $0214 ; save sprite Y position <br>STA $0218 <br>CLC <br>ADC #$08 <br>STA $021C <br>STA $0220 <br><br>LDA sprite_horizontal <br>STA $0217 ; load sprite X position <br>STA $021F <br>CLC <br>ADC #$08 <br>STA $021B <br>STA $0223 <br>RTS </p><p>The way your doing it doesn&apos;t mean anything.&#xA0; What MetalSlime meant is that you transfer $0214 and $0217 to the variables above, then run your moving and collision detection ON the variables, then run something like above.&#xA0; You can&apos;t update them like you&apos;re doing there.</p><p>.db is for numbers, .word is for addresses.&#xA0; MetalSlime goes through this in his sound tutorials.&#xA0; i.e.</p><p>&#xA0; .db $01, $02, $09, $FF, etc.</p><p>&#xA0; .word $0217, $0218, $02FF, etc.</p><p>or you can use variables or constants defined in your zerospace in these tables or pretty much anything you want.&#xA0; </p>
				</div><div class="mdl-card--border"></div>