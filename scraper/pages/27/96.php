<div class="mdl-card__title"><strong>Dimeback</strong> posted on 
		
			
				
				Dec 11, 2013 at 10:05:05 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I&apos;m a bit new to NES programming, so after doing some research when some programming veteran brought up the term &quot;hardcoded OAM&quot;, I discovered my sprite data was hardcoded (my sprite is 16x16 pixels). I was wondering how I could make it non-hardcoded (hopefully this all makes sense to you). I was told to draw all the other sprites around the main sprite I use for movement, collisions, updates, etc. but I am not sure how todo that. Here is my sprite drawing routine:<br>
<br>
PlayingSP: ; These are the sprites during the game<br>
;vert tile attr horiz<br>
.db $B0, $00, $00, $20<br>
.db $B0, $01, $00, $28<br>
.db $B8, $02, $00, $20<br>
.db $B8, $03, $00, $28<br>
.db $37, $37, $37, $37 ;end &#xA0; &#xA0;&lt;- Ignore this.
				</div><div class="mdl-card--border"></div>