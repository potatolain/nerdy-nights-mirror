<div class="mdl-card__title"><strong>Mega Mario Man</strong> posted on 
		
			
				
				Apr 15, 2016 at 5:08:46 PM 
			
			
			
			
		
	</div><div class="mdl-card__supporting-text">
					<div class="FTQUOTE"><i>Originally posted by: <b>Alder</b></i><br>
What I was also wondering is, I&apos;ve seen words prefixed with a dot used as loop in some NES code. Things like .loop to construct a local loop.. does this work only because of horizontal placement, and do they work like any other label?</div>
<br>
I&apos;m no super programmer, so I really don&apos;t know what &apos;horizontal placement&apos; is, but in NESASM, the dot before a label means that you can reuse that label in another subroutine. Example:<br>
<br>
Label1:<br>
&#xA0;&#xA0;&#xA0; code code code<br>
&#xA0;&#xA0; .loop:<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; loopy code<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; BEQ .loop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; (Branch if Equal to .loop)<br>
EndLabel1:<br>
&#xA0;&#xA0; RTS<br>
<br>
Label2:<br>
&#xA0;&#xA0;&#xA0; code code code<br>
&#xA0;&#xA0; .loop:<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; loopy code<br>
&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; BEQ .loop&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0;&#xA0; (Branch if Equal to .loop)<br>
EndLabel2:<br>
&#xA0;&#xA0;&#xA0; RTS<br>
<br>
Label1 and Label2 are unique labels, so you can&apos;t reuse them. the .loop labels only look inside it&apos;s specific subroutine, so you can reuse that same label in another subroutine.<br>
<br>
Hope that made sense.
				</div><div class="mdl-card--border"></div>