<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Oct 17, 2014 at 10:43:43 AM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					The tricky part about the Power Pad is that it doesn&apos;t register on bit 1. It registers on bits 3 and 4. So, 8 of the buttons will look like this 0000 1000, the other four look like this 0001 0000. You have to check both bits on each pass because the first 4 passes can be 0000 1000 or 0001 0000. The last four passes really don&apos;t matter because it can only be 0000 1000. So, with your code, I think I would have to do this:<br>
<br>
;read 2<br>
lda $4016<br>
ror&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;--Bit 0, Standard Controller<br>
ror&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;--Bit 1<br>
ror&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; &lt;--Bit 2<br>
ror&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ;&lt;--Bit 3, Power Pad First 8 Buttons, Check on all 8 passes of $4016<br>
rol buffer_controller<br>
;read 4<br>
ror&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; &#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; ; &lt;--Bit 4, Power Pad Last 4 Buttons, Check on the first 4 passes of $4016<br>
rol buffer_controller+1<br>
<br>
;read 1<br>
lda $4016<br>
ror<br>
ror<br>
ror<br>
ror<br>
rol buffer_controller+2<br>
;read 3<br>
ror<br>
rol buffer_controller+3<br>
<br>
;read 5<br>
lda $4016<br>
ror<br>
ror<br>
ror<br>
ror<br>
rol buffer_controller+4<br>
;read 12<br>
ror<br>
rol buffer_controller+5<br>
<br>
;read 9<br>
lda $4016<br>
ror<br>
ror<br>
ror<br>
ror<br>
rol buffer_controller+6<br>
;read 8<br>
ror<br>
rol buffer_controller+7<br>
<br>
;read 6<br>
lda $4016<br>
ror<br>
ror<br>
ror<br>
ror<br>
rol buffer_controller+8<br>
<br>
;read 10<br>
lda $4016<br>
ror<br>
ror<br>
ror<br>
ror<br>
rol buffer_controller+9<br>
<br>
;read 11<br>
lda $4016<br>
ror<br>
ror<br>
ror<br>
ror<br>
rol buffer_controller+10<br>
<br>
;read 7<br>
lda $4016<br>
ror<br>
ror<br>
ror<br>
ror<br>
rol buffer_controller+11
				</div><div class="mdl-card--border"></div>