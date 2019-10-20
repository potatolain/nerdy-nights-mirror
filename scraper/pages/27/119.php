<div class="mdl-card__title"><strong>SoleGooseProductions</strong> posted on 
		
			
				
				Jan 22, 2014 at 3:47:25 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Well let&apos;s see how much or how little I understand. The HeroPosition variable is already in the zero page; is this what you meant? Or am I missing something? Should I not be not be touching the SPRITE_BANK addresses at all when doing player movement?
<br>
<br>As far as rendering sprites, should I figure out the maximum number that will be on a screen at once and then load all of them in a table each time that I call the LoadSprites routine? Any that are not used would of course be given addresses off screen.
<br>
<br>The &quot;fill sprites&quot; thing you mention, is that part of the sprite table, or will a separate routine be needed? I assume that it is part of the table, but just wanted to clarify.
<br>
<br>Sad to say, but the last comment leaves me baffled in terms of the &quot;if you have a cut screen (?) you skip move+render and just do fill.&quot; Sorry for asking you to dumb it down a shade (to quote a famous cartoon character), but I want to make sure that I get what is going on before proceeding and the having to go back and redo a bunch of things.
				</div><div class="mdl-card--border"></div>