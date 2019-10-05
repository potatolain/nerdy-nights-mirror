<div class="mdl-card__title"><strong>udisi</strong> posted on 
		
			
				
				Dec 17, 2009 at 12:51:23 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					yup write to the next loaction
<br>
<br>LDA (Ball sprite y potision)
<br>STA $0200
<br>LDA (Ball sprite tile number)
<br>STA $0201
<br>LDA (ball palette number)
<br>STA $0202
<br>LDA (ball x position)
<br>STA $0203
<br>then you can add paddles next. depends on how big you want your paddles, probably atleast 2 sprites a paddle
<br>
<br>LDA (paddle1 top y postion
)<br>STA $0204
<br>LDA (paddle sprite. You can use the same sprite for both sections)
<br>STA $0205
<br>LDA (paddle sprite palette number)
<br>STA $0206
<br>LDA (paddle1 top x position)
<br>STA $0207
<br>
<br>etc
<br>etc
<br>etc 
<br>
<br><br>
				</div><div class="mdl-card--border"></div>