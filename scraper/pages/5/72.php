<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Feb 2, 2011 at 11:29:48 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Sprite_RAM should be a constant when used in this case.
<br>
<br>i.e.
<br>Sprite_RAM = $0200
<br>Then 
<br>STA Sprite_RAM+68
<br>means
<br>STA $0244
				</div><div class="mdl-card--border"></div>