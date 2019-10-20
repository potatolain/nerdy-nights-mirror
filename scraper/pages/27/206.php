<div class="mdl-card__title"><strong>Mario&apos;s Right Nut</strong> posted on 
		
			
				
				Apr 21, 2014 at 3:39:39 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					You really shouldn&apos;t be running your entire code in NMI like that. If that is your whole program, you&apos;ve removed the actual &quot;run during NMI&quot; part. Like KHAN said, you just run through the code continuously from top to bottom, over and over, and all NMI does is jump in and insert an additional run through in when NMI hits. Take a look through the NN and my tutorials again, it splits it out nicely.<br>
<br>
Also, you should be pushing/popping your registers in NMI or it will cause more problems.<br>
<br>
Also, and this really isn&apos;t important at this point, but if you just have a 0/1 flag, you can use something like:<br>
<br>
UpdateColor:<br>
LDA ChangeColor ;make a variable in zero page and set it to #$01 whenever you want this color to change.<br>
BEQ .End<br>
LDA $2002 ;changing the palette (and background tiles)<br>
LDA #$3F<br>
STA $2006<br>
LDA #$11 ;address of specific color you want to change<br>
STA $2006<br>
LDA attribute_RAM ;value of new color you want to change it to.<br>
STA $2007<br>
DEC ChangeColor<br>
.End:<br>
RTS<br>
				</div><div class="mdl-card--border"></div>