<div class="mdl-card__title"><strong>Jemoozu</strong> posted on 
		
			
				
				Feb 24, 2011 at 11:39:04 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Here&apos;s what I did, I don&apos;t know if this is correct or not.
<br>
<br>The original code:
<br>
<br> LDA #$80
<br>  STA $0200        ; put sprite 0 in center ($80) of screen vert
<br>  STA $0203        ; put sprite 0 in center ($80) of screen horiz
<br>  LDA #$00
<br>  STA $0201        ; tile number = 2
<br>  STA $0202        ; color = 2, no flipping
<br>
<br>Newer code:
<br>
<br> LDA #$C0
<br>  STA $0200        ; put sprite 0 in center ($80) of screen vert
<br>  STA $0203        ; put sprite 0 in center ($80) of screen horiz
<br>  LDA #$00
<br>  STA $0201        ; tile number = 2
<br>  STA $0202        ; color = 2, no flipping
<br>
<br>I only changed the value of #$80, because when I messed with $#00 
and $#80, the sprite was translated to a different part of the screen, 
but it changed. By changing only $#80, the sprite moved, but it retained
 its original form.
				</div><div class="mdl-card--border"></div>