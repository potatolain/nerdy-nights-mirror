<div class="mdl-card__title"><strong>JC-Dragon</strong> posted on 
		
			
				
				Jul 7, 2012 at 8:32:07 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					it was inevitable but here I am asking for help again. I&apos;m trying to map my controller to move sprites for the paddles. I can get a sprite to move but with the wrong button.<br>
MovePaddleUp:<br>
LDA buttons1<br>
AND #$00001000 &lt;--------- this is supposed to be the up button but NESASM throws an error at me when I do this<br>
BEQ MovePaddleUpDone ; but if I change it to #$00000010, or #$00000001 it works but with start<br>
LDA $0204 ; and right respectively is there something else I need to do to get this to work correctly before hand?<br>
SEC<br>
SBC #$01 ; if up button pressed<br>
CMP #TOPWALL<br>
STA $0204 ; if paddle top &gt; top wall ; move paddle top and bottom up<br>
<br>
-----EDIT----<br>
<br>
figured it out&#xA0; #$00001000 is supposed to be #%00001000. got the $ and the % mixed up.
				</div><div class="mdl-card--border"></div>