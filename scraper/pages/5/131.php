<div class="mdl-card__title"><strong>Dredster</strong> posted on 
		
			
				
				Jan 9, 2015 at 10:06:15 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					I am at a loss; how do I get the sprite to move up and down I tried adding ReadUp: 
<br>  LDA $4016
<br>  AND #%00000001
<br>  BEQ ReadUpDone
<br>
<br>  LDA $0200
<br>  SEC
<br>  SBC #$01  
<br>  STA $0200
<br>ReadUpDone:
<br>
<br>
<br>ReadDown:
<br>  LDA $4016
<br>  AND #%00000001
<br>  BEQ ReadDownDone
<br>
<br>  LDA $0200
<br>  CLC       
<br>  ADC #$01   
<br>  STA $0200
<br>ReadDownDone:
<br>, but that does not work is there another directive I need to add or change. Could someone point me in the right direction or tell me ?
				</div><div class="mdl-card--border"></div>