<div class="mdl-card__title"><strong>RockyHardwood</strong> posted on 
		
			
				
				Aug 26, 2017 at 12:19:50 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					Not too hard, I do the same thing. This is taken care of with some bit operations.<br>
<br>
To check a bit, AND the byte with a mask, like this<br>
<br>
LDA Flags ; Flags = %10010011<br>
AND #%00010000<br>
<br>
You&apos;ll either get %0001000 or %00000000 out of it.<br>
From here, you can use BEQ or BNE since you just need to know if it came out as 0 or not.<br>
<br>
You can set a bit to 1 like this:<br>
<br>
LDA Flags ;%10000011<br>
ORA #%00010000<br>
STA Flags<br>
<br>
And set it to 0 like:<br>
<br>
LDA Flags ;%10010011<br>
AND #%11101111<br>
STA Flags<br>
<br>
EDIT: fixed the #&apos;s
				</div><div class="mdl-card--border"></div>